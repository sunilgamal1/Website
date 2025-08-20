<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs']= Blog::where('status', 1)->orderBy('position', 'asc')->paginate(2);
        return view('frontend.blogs.index', $data);
    }

    public function show($slug)
    {
        $data['blog']= Blog::where('slug', $slug)->first();
        
        // Get previous post using position field
        $data['previous_post'] = Blog::where('status', 1)
            ->where('position', '<', $data['blog']->position)
            ->orderBy('position', 'desc')
            ->first();
            
        // Get next post using position field
        $data['next_post'] = Blog::where('status', 1)
            ->where('position', '>', $data['blog']->position)
            ->orderBy('position', 'asc')
            ->first();
            
        // If no previous post, get the last post (circular navigation)
        if (!$data['previous_post']) {
            $data['previous_post'] = Blog::where('status', 1)
                ->where('position', '!=', $data['blog']->position)
                ->orderBy('position', 'desc')
                ->first();
        }
        
        // If no next post, get the first post (circular navigation)
        if (!$data['next_post']) {
            $data['next_post'] = Blog::where('status', 1)
                ->where('position', '!=', $data['blog']->position)
                ->orderBy('position', 'asc')
                ->first();
        }
        
        return view('frontend.blogs.show', $data);
    }
}
