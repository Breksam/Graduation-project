<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use App\Models\User;
use App\Traits\ImageProcessing;

class ProfileController extends Controller
{
    use ImageProcessing;

    public function update(ProfileUpdateRequest $request){
        $user = $request->user();
        $validatedData = $request->validated();        
        $validatedData['image'] = $request->file('image') == null ? $user->image : $request->file('image')->store('users', 'images') ;

        $user->update($validatedData);
        $user = $user->refresh();
        
        $success['user'] = $user;
        $success['success'] = "your data is updated successfully";

        return response()->json($success, 200);
    }
}
