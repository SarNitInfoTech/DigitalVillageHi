<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $galleryPhotos = [
    [
        'image' => asset('images/gallery/thumb1.jpg'),
        'full' => asset('images/gallery/full1.jpg'),
        'title' => 'Independence Day Celebration',
        'alt' => 'Independence Day Photo',
        'thumb'=>''
    ],
    [
        'image' => asset('images/gallery/thumb2.jpg'),
        'full' => asset('images/gallery/full2.jpg'),
        'title' => 'Science Exhibition',
        'alt' => 'Science Exhibition Photo',
        'thumb'=>''

    ],
    // Add more...
];
$galleryVideos = [
    [
        'image' => asset('images/gallery/thumb1.jpg'),
        'full' => asset('images/gallery/full1.jpg'),
        'title' => 'Independence Day Celebration',
        'alt' => 'Independence Day Photo',
        'thumbnail'=>'',
        'embedUrl'=>'',
    ],
    [
        'image' => asset('images/gallery/thumbnail2.jpg'),
        'full' => asset('images/gallery/full2.jpg'),
        'title' => 'Science Exhibition',
        'alt' => 'Science Exhibition Photo',
        'thumbnail'=>'',
        'embedUrl'=>'',

    ],
    // Add more...
];
        return view("home",compact('galleryPhotos','galleryVideos'));
    }
}
