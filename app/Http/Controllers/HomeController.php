<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function getGallery()
    {
        $galleries = [];
        $files = File::files(public_path('gallery'));

        foreach ($files as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                $galleries[] = $file->getFilename();
            }
        }

        return $galleries;
    }
    
    public function showHome()
    {
        $galleries = $this->getGallery();
        return view('home', compact('galleries'));
    }
}
