<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class OcrController extends Controller
{
    public function index()
    {
        return view('tryOcr');
    }

    public function store(Request $request)
    {
        $imagePath = $request->file('image')->path();

        $text = (new TesseractOCR($imagePath))->run();

        return response()->json(['text' => $text]);
    }

}
