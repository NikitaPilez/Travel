<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadPhotoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
        }

        $user = User::find(1);
        $user->avatar = json_encode($data);
        $user->save();

        return back();
    }
}
