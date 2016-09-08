<?php
namespace App\Http\Controllers;
 
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller{

    public function index(){
        $blogs  = Blog::all();
        return response()->json($blogs);
    }

    public function getBlog($id){
        $blog  = Blog::find($id);
        return response()->json($blog);
    }
 
    public function saveBlog(Request $request){
        $blog = Blog::create($request->all());
        return response()->json($blog);
    }

    public function deleteBlog($id){
        $blog  = Blog::find($id);
        $blog->delete();
        return response()->json('success');
    }
    public function updateBlog(Request $request,$id){
        $blog  = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        return response()->json($blog);
    }
 
}