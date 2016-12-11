<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\TestData;

class TestController extends Controller
{
    public function setLocation(Request $request) {
        TestData::create([
            'field1' => $request->get('lat'),
            'field2' => $request->get('lng'),
        ]);
    }
}
