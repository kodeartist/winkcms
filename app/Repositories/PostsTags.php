<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;


trait PostsTags
{



	/**

	Pull posts based on Tag or Category
	Tag or Category is passed as a variable property

	*/

	protected function tags($name){


	    $postsWithTag= WinkTag::with('posts')
						->where('name',$name)
						->orderBy('created_at', 'DESC')
						->simplePaginate(10);

	            $posts =[];

	            foreach ( $postsWithTag as $post ) {

	               $posts = $post->posts;

	            }

	    return $posts;

	}

	
	/**

	Pull all posts
	Pass a post property to fetch a post

	*/

	protected function posts($post = NULL){

		
		if($posts = NULL){

			$posts = WinkPost::with('tags')
	            ->live()
	            ->orderBy('publish_date')
	            ->simplePaginate(5);

	    	return $posts;

		}else{

			$post = WinkPost::whereSlug($post)->firstOrFail();

			return $post;
		}    

	}

}