<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.profile.index")->with(["user"=>Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("user.profile.edit")->with(["user"=>Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
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
            
            return redirect()->route("user.profile.index")->with("message","success");
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
