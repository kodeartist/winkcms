<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostsTags;


class BlogController extends Controller
{
    use PostsTags;

    /**
    * From wink you can make a tag with the name of your Category
    * Pull only published articles or content.
    * You can have content within content and pull the data.
    */
    public function index()
    {
        // Checks if posts has any count
        $posts = $this->tags('Category')->where('published',True)->count();

        // If posts does not have any count, it means posts is 0.
        // Or if posts is set to draft.
        if($posts == 0){
        \Session::flash('warning','Start posting today!');
        return view('welcome');
        }

        $posts = $this->tags('Category')->where('published',True);

        return view('blog.index', [
           'posts' => $posts,
        ]);
    }


    /**
    * From wink you can make a single post query    
    * Pull only published articles or content
    */
    public function show($post)

    {
        $post = $this->posts($post);

        return view('blog.show',
        [
            'post' => $post,
        ]);
    }

}
