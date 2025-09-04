<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
   public function index()
    {
        $faqs = Faq::where('visibility', 1)->get()->map(function ($faq) {
            $faq->description   = strip_tags($faq->description);
            return $faq;
        });

        return response()->json($faqs);
    }
}
