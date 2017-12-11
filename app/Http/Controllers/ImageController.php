<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete(Request $request)
    {
        $image = Image::find($request->id);
        Storage::delete($image);
        $image->delete();

        return response()->json(['success' => true], 200);
    }
}
