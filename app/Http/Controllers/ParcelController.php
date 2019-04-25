<?php

namespace App\Http\Controllers;

use App\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function store(Request $request)
    {
        $parcel = new Parcel();
        $parcel->name = $request->name;
        $parcel->type = $request->type;
        $parcel->price = $request->price;

        $parcel->save();
        return response()->json(['success' => 'Data is successfully added']);
    }
}
