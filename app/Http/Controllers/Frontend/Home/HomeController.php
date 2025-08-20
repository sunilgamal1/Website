<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Model\GraphicArt;
use App\Model\DigitalDesign;
use App\Model\Motion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['arts'] = GraphicArt::where('publish_at_home', 1)->orderBy('position', 'asc')->get();
        $data['digital_designs'] = DigitalDesign::where('publish_at_home', 1)->orderBy('position', 'asc')->get();
        $data['motions'] = Motion::where('publish_at_home', 1)->orderBy('position', 'asc')->get();
        return view('frontend.home.index', $data);
    }
}
