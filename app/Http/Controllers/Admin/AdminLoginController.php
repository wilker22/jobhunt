<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AdminLoginController extends Controller
{
    public function login()
    {
       $pass = Hash::make('1234');
        //dd($pass);
        return view('admin.login', compact('pass'));
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Credenciais inválidas!');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email', $request->email)->first();
       
        if(!$admin_data){
            return redirect()->back()->with('error', 'E-mail não encontrado!');
        }

        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Por favor clique no link a seguir: <br>';
        $message .= '<a href="'.$reset_link.'">Reiniciar Senha</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('admin_login')->with('success', 'Verifique sua caixa de e-mail!');

    }


    public function reset_password($token,$email)
    {
        $admin_data = Admin::where('token',$token)->where('email',$email)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login');
        }

        return view('admin.reset_password', compact('token','email'));

    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $admin_data = Admin::where('token',$request->token)->where('email',$request->email)->first();

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();

        return redirect()->route('admin_login')->with('success', 'Senha atualizada com sucesso!');

    }
}
