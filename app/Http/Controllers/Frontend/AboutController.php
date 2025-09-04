<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\AboutSection;
use App\Models\BorderSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{
    public function index(){
        $about_details = AboutSection::first();
        $border = BorderSection::first();
        return view("frontend.about", compact('about_details','border'));
    }


}
