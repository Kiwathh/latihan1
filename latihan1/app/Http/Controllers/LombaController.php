<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class LombaController extends Controller
{
    public function submit(Request $request)
    {
        $path = $request->file('poster_photo')->store('poster_photo', 'public');

        $data = $request->only(['name', 'kelas', 'judul']);
        $data['poster_path'] = $path;

        return view('result', ['data' => $data]);
    }
}
