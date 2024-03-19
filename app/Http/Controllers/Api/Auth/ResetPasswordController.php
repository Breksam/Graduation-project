<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ResetPasswordRequest;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Support\Facades\Hash ;
// use SadiqSalau\LaravelOtp\Facades\Otp;
use Otp;


class ResetPasswordController extends Controller
{
    private $otp;

    public function __construct(){
        $this->otp = new Otp;
    }

    public function passwordReset(ResetPasswordRequest $request){
        $otp2 = $this->otp->validate($request->email, $request->otp);
       

        $user = User::where('email', $request->email)->first();
        $user->update(['password'=> Hash::make($request->password)]);
        $user->tokens()->delete();

        $success['success'] = "your new password is updated successfully";
        return response()->json($success, 200);

        if(!$otp2->status){
            return response()->json(['error' => $otp2], 401);
        }
    }
}
