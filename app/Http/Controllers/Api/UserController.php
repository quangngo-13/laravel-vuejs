<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function me(){
        $user = JWTAuth::parseToken()->authenticate();
        if (!empty($user)){
            unset($user->password,$user->remember_token,$user->created_at,$user->updated_at);
            return response()->json([
                'code' => 200,
                'msgdefault'  => 'Get dữ liệu thành công',
                'data'     => $user,
            ], 200);
        }else{
            return response()->json([
                'code' => 200,
                'msgdefault'  => 'Get dữ liệu thất bại',
            ], 201);
        }
    }
}
