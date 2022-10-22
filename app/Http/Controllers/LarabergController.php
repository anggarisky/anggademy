<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LarabergController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->hasFile('image') ? $request->file('image') : null;
        $image = pathinfo(
            $file->getClientOriginalName(),
            PATHINFO_FILENAME
        ) . '-' . Str::random() . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path('app/public/laraberg'), $image);

        return response()->json([
            'msg' => "/storage/laraberg/" . $image,
            'file' => $file,
            'request' => $request
        ]);
    }
}
