<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostsTags;


class BlogController extends Controller
{
    use PostsTags;


    public function index()
    {
		$posts = $this->tags('Category')->where('published',True);

		return view('blog.index', [
			'posts' => $posts,
		]);
    }


    public function show($post)
    {
        $post = $this->posts($post);

        return view('blog.show',
        [
            'post' => $post,
        ]);
    }

}
