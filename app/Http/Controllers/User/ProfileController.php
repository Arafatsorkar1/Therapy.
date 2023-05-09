<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('backend.user.pages.profile.index',compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.pages.profile.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->image = uploadImage($request,$user) ?? $user->image;
        $user->about = $request->about;
        $user->save();
        toast('Profile Updated....... :)','success');
        return redirect()->route('user.profile');
    }
}
