<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.post', compact('posts'));
    }

    public function create()
    {
        return view('admin.post_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|alpha_dash|unique:posts',
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Post();

        //tratamento do arquivo da foto
        $ext = $request->file('photo')->extension();
        $final_name = 'post_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->total_view = 0;
       

        $obj->save();

        return redirect()->route('admin_post')->with('success', 'Post cadastrado com sucesso!');
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

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
        }

        unlink(public_path('uploads/' . $obj->photo));
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial_' . time() . '.' . $ext;
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
        unlink(public_path('uploads/' . $testimonial_single->photo));
        $testimonial_single->delete();

        return redirect()->route('admin_testimonial')->with('success', 'Testimonial removida com sucesso!');
    }
}
