<?php

namespace App\Http\Controllers\Frontend\Motion;

use App\Http\Controllers\Controller;
use App\Model\Motion;
use App\Model\MotionImage;
use App\Model\MotionInfo;
use Illuminate\Http\Request;

class MotionController extends Controller
{
    public function index()
    {
        $data['motions']= Motion::where('status', 1)->orderBy('position', 'asc')->get();
        return view('frontend.motion.index', $data);
    }

    public function show($slug)
    {
        $data['motion'] = Motion::where('slug', $slug)->first();
        $data['motion_images'] = MotionImage::where('motion_id', $data['motion']->id)->get();
        $data['motion_info'] = MotionInfo::where('motion_id', $data['motion']->id)->get();
        
        // Get next project
        $data['next_work'] = Motion::where('status', 1)
            ->where('id', '>', $data['motion']->id)
            ->orderBy('id', 'asc')
            ->first();
            
        // If no next project, get the first project (circular navigation)
        if (!$data['next_work']) {
            $data['next_work'] = Motion::where('status', 1)
                ->orderBy('id', 'asc')
                ->first();
        }
        
        return view('frontend.motion.detail', $data);
    }
}
