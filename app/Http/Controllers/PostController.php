<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\F;
use PhpOffice\PhpSpreadsheet\Chart\Title;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    // public function addPost()
    // {
    //     return view('add-post');
    // }

    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created','Post has been created successsfully!');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('sigle-post', compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!');
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }
 
    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated','Post has been updated successfully!');
    }

    public function index()
    {
        $posts = Posts::orderBy('id','desc')->get();
        return view('posts',compact('posts'));
    }

    public function addPost(Request $request)
    {
        $post = new Posts();
        $post-> title = $request->title;
        $post-> body = $request->body;
        $request->save();
        return response()->json($post);
    }

}


