<?php

namespace App\Http\Controllers\Frontend\ArtDesign;

use App\Http\Controllers\Controller;
use App\Model\GraphicArt;
use App\Model\GraphicArtImage;
use Illuminate\Http\Request;

class ArtDesignController extends Controller
{
    public function index()
    {
        $data['arts'] = GraphicArt::where('status', 1)->orderBy('position', 'asc')->get();
        return view('frontend.art-design.index', $data);
    }

    public function show($slug)
    {
        $data['art'] = GraphicArt::where('slug', $slug)->first();
        $data['images'] = GraphicArtImage::where('graphic_art_id', $data['art']->id)->get();
        return view('frontend.art-design.detail', $data);
    }
}
