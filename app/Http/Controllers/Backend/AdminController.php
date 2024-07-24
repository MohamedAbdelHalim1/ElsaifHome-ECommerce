<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stuff; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function get_profile(){
        return view('backend.profile');
    }

    public function update_profile(Request $request){
        $stuff = Stuff::find(Auth::id());
        $stuff->name = $request->name;
        $stuff->email = $request->email;
        $stuff->save();
        return redirect()->route('profile')
        ->with('success', 'Profile Updated successfully!'); 
    }
}
