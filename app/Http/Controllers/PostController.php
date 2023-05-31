<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use DB;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {
        $title = $request->query('title');
        $content = $request->query('content');

        $posts = DB::table('posts')
        ->join('comments','comments.id','=','posts.id')
        ->where('title','like',"%".$title."%")
        ->where('content','like',"%".$content."%")
        ->paginate(3);
 
		return view('post',['posts' => $posts]);
    }
}
