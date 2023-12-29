<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $post_single = Post::where('id', $id)->first();
        return view('admin.post_edit', compact('post_single'));
    }


    public function update(Request $request, $id)
    {
        $obj = Post::where('id', $id)->first();

        $request->validate([
            'title' => 'required',
            'slug' => ['required','alpha_dash', Rule::unique('posts')->ignore($id)],
            'short_description' => 'required',
            'description' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
        }

        unlink(public_path('uploads/'.$obj->photo));
        $ext = $request->file('photo')->extension();
        $final_name = 'post_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;

        $obj->update();

        return redirect()->route('admin_post')->with('success', 'Post ATUALIZADO com sucesso!');
    }

    public function delete($id)
    {
        $post_single = Post::where('id', $id)->first();
        unlink(public_path('uploads/'.$post_single->photo));
        Post::where('id', $id)->delete();

        return redirect()->route('admin_post')->with('success', 'Post removido com sucesso!');
    }
}
