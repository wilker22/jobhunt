<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        // dd($testimonials);

        return view('admin.testimonial', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Testimonial();

        //tratamento do arquivo da foto
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial_'.time().'.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;

        $obj->save();

        return redirect()->route('admin_testimonial')->with('success', 'Testimonial cadastrado com sucesso!');
    }


    public function edit($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        return view('admin.testimonial_edit', compact('testimonial_single'));
    }


    public function update(Request $request, $id)
    {
        $obj = Testimonial::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',

        ]);

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
        }

        unlink(public_path('uploads/'.$obj->photo));
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial_'.time().'.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;

        $obj->update();

        return redirect()->route('admin_testimonial')->with('success', 'Testimonial ATUALIZADO com sucesso!');

    }

    public function delete($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        unlink(public_path('uploads/'.$testimonial_single->photo));
        $testimonial_single->delete();

        return redirect()->route('admin_testimonial')->with('success', 'Testimonial removida com sucesso!');
    }
}
