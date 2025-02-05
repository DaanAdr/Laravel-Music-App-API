<?php

namespace App\Http\Controllers\SongControllers;

use app\Model\Song;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreSongController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //$this->validateInput($request);
        $request->validate([
            'name' => 'required|regex:/^[\p{L} ]+$/u', // This regex allows letters and spaces
        ]);
    
        return Song::create($request->all());
    }

    private function validateInput(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[\p{L} ]+$/u', // This regex allows letters and spaces
        ]);
    }
}
