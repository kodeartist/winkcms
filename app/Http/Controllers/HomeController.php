<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostsTags;

class HomeController extends Controller
{

    use PostsTags;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $posts = $this->tags('Category')->where('published',True);

        return view('blog.index', ['posts' => $posts ]);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $posts= $this->posts($slug);

        foreach ( $posts as $value ) {

             $post = WinkPost::where('slug', $slug)->first();

        }


        // $services = $this->tags('Services');

        // $category = $this->category->getCategories();

        return view('blog.show',
        [
            'post' => $post,
        ]);
    }
}
