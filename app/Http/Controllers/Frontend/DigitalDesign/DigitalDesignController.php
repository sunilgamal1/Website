<?php

namespace App\Http\Controllers\Frontend\DigitalDesign;

use App\Http\Controllers\Controller;
use App\Model\DigitalDesign;
use App\Model\DigitalDesignImage;
use App\Model\DigitalDesignInfo;
use Illuminate\Http\Request;

class DigitalDesignController extends Controller
{
    public function index()
    {
        $data['digital_designs'] = DigitalDesign::where('status', 1)->orderBy('position', 'asc')->get();
        return view('frontend.digital-design.index', $data);
    }

    public function show($slug)
    {
        $data['digital_design'] = DigitalDesign::where('slug', $slug)->first();
        $data['digital_design_images'] = DigitalDesignImage::where('digital_design_id', $data['digital_design']->id)->get();
        $data['digital_design_info'] = DigitalDesignInfo::where('digital_design_id', $data['digital_design']->id)->get();
        
        // Get next project
        $data['next_work'] = DigitalDesign::where('status', 1)
            ->where('id', '>', $data['digital_design']->id)
            ->orderBy('id', 'asc')
            ->first();
            
        // If no next project, get the first project (circular navigation)
        if (!$data['next_work']) {
            $data['next_work'] = DigitalDesign::where('status', 1)
                ->orderBy('id', 'asc')
                ->first();
        }
        
        return view('frontend.digital-design.detail', $data);
    }
}
