<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\RelationshipSection;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PricingController extends Controller
{
    public function index(){

        $relation = RelationshipSection::first();
           $faqs = Faq::all();

        return view("frontend.pricing", compact('relation','faqs'));
    }


}
