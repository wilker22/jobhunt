<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Mail\Websitemail;
use App\Models\Admin;
use App\Models\PageContactItem;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact_page_item = PageContactItem::where('id', 1)->first();
        return view('front.contact', compact('contact_page_item'));
    }

    public function submit(Request $request)
    {
        $admin_data = Admin::where('id',1)->first();

        $request->validate([
            'person_name' => 'required',
            'person_email' => 'required',
            'person_message' => 'required',
        ]);

        $subject = 'Menssagem de Contato';
        $message = 'Visitante: <br>';
        $message .= 'Nome:'.$request->person_name.'<br>';
        $message .= 'E-mail:'.$request->person_email.'<br>';
        $message .= 'Mensagem:<br>'.$request->person_message.'<br>';

        \Mail::to($admin_data->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', 'Mensagem enviado com sucesso!   ');
    }
}
