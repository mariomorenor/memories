<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        return view("user.profile.index")->with(["user"=>Auth::user()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view("user.profile.edit")->with(["user"=>Auth::user()]);
    }

    public function update(UserRequest $request, User $user)
    {
            return DB::transaction(function() use($request, $user){
            
                $user->fill($request->all());
                
                if ($request->hasFile("profile_photo")) {
                    
                    $image = $request->file("profile_photo");
                    
                    $image_path = Storage::putFileAs("public/$user->id",$image,"profile_photo.png");
    
                    $user->image_url = asset(Storage::url($image_path))."?".rand(1,9999);
                }
    
                if ($request->has("password")) {
                    $user->password = Hash::make($request->password);
                }
    
                $user->save();
                
                return redirect()->route("user.profile.change-password")->with("message","success");
            });
    }

    public function destroy(User $user)
    {
        //
    }

    public function change_password(Request $request)
    {
        return view("user.password.index")->with(["user"=>Auth::user()]);
    }
}
