<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post',
            'my-sec-post' => 'Now i am getting hang of this blogging thing'
        ];

        if(!array_key_exists($post, $posts)){
            abort(404,'Sorry, that poast was deleted');
        }
        return view('post',[
            'post' => $posts[$post]
        ]);
    }
}
