<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\FeatureSection;
use App\Models\TetherheartSection;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeatureController extends Controller
{
    public function index(){
        $feature = FeatureSection::first();
        $tetherheart = TetherheartSection::first();

        return view("frontend.feature",compact('feature','tetherheart'));
    }


}
