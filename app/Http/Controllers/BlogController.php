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
