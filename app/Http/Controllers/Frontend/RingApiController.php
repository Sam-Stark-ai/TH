<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Ring;
use App\Models\Gift;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RingApiController extends Controller
{
   public function gift()
   {
        $gifts = Gift::all()->map(function ($gift) {
            $gift->description = strip_tags($gift->description);
            return $gift;
        });

        return response()->json($gifts, 200);
   }

    public function ring(){
        $rings = Ring::all()->map(function ($ring){
            $ring->description = strip_tags($ring->description);
            return $ring;
        });

        return response()->json($rings, 200);

    }


}
