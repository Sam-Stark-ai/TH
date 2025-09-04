<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Models\FeatureSection;

use App\Models\ContactSection;
use App\Models\TetherWork;
use App\Models\DownloadSection;
use App\Models\Faq;
use App\Models\VisitStat;
use App\Models\Contact;
use App\Models\NewNewsletter;
use Illuminate\Support\Facades\Validator;
use App\Models\TetherheartSection;
use App\Models\ProductivitySection;
use App\Models\RelationshipSection;
use App\Models\BorderSection;
use App\Models\HeartRing;
use App\Models\ConnectionSection;
use App\Models\WellnessSection;
use App\Models\NewFeatureSection;
use App\Models\BlendSection;
use App\Models\Wellness;
use App\Models\TetherCardSection;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class HomeController extends Controller
{



public function subscribe(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:new_newsletters,email',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first('email'),
        ]);
    }

    try {
        NewNewsletter::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thanks for subscribing!',
        ]);
    } catch (\Exception $e) {
        Log::error('Newsletter subscription error: ' . $e->getMessage());

        return response()->json([
            'status' => 'error',
            'message' => 'Something went wrong. Please try again later.',
        ]);
    }
}
public function index()
{

     $stat = VisitStat::first();
    if (!$stat) {
        VisitStat::create(['home_visits' => 1]);
    } else {
        $stat->increment('home_visits');
    }

    $herosection = HeroSection::first();
    $features = FeatureSection::first();
    $tetherheart = TetherheartSection::first();
    $tetherwork = TetherWork::all();
    $download = DownloadSection::first();
    $productivity = ProductivitySection::first();
    $heartring = HeartRing::first();
    $connection = ConnectionSection::first();
    $blend = BlendSection::first();
    $wellness = WellnessSection::first();
    $wellness_cards = Wellness::all();
    $tethercard = TetherCardSection::first();
    $newfeature = NewFeatureSection::first();
      $contactSection = \App\Models\ContactSection::first();
    $relation = RelationshipSection::first();
    $border = BorderSection::first();
    $rings = \App\Models\Ring::all();
    // $iseeyousection = IseeyouSection::first();
    // $partnershipsection = PartnershipSection::first();
    // $autodepositsection = AutodepositSection::first();
    // $contactsection = ContactSection::first();
    // $faqs = Faq::where('visibility', 1)->get();
    // $newsletters = Newsletter::where('visibility', 1)->get();

    return view('frontend.index'
    , compact(
'herosection','features','tetherheart','tetherwork','download','productivity','heartring',
'connection','blend','wellness','wellness_cards','tethercard','newfeature','relation','border',
'contactSection','rings'
    )
);
}

    public function contactStore(Request $request){

    try {
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone' => 'nullable|string|max:255',
                'message' => 'required|string',

            ]);

            $validatedData = $request->only(['firstname', 'lastname', 'email','phone','message']);

            Log::info('Validated Contact data:', $validatedData);

            $contact = Contact::create([
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'message' => $validatedData['message'],
            ]);

            Log::info('Contact created successfully:', ['id' => $contact->id]);

            return redirect()->route('home')->with('success', 'Contact Details Successfully');
        } catch (\Exception $e) {
            Log::error('Error while creating Contact:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


}
