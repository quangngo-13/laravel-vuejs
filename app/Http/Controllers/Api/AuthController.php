<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Model\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function login(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required',
                'password' => 'required|min:6|max:32',
            ]);
        if ($validator->fails()) {
            return response()->json(["msgdefault" => $validator->errors()->first()]);
        }
        $user = User::where('phone',$request->phone)->first();
        if (!empty($user)){
            if (Hash::check($request->password,$user->password)){
                $token = JWTAuth::fromUser($user);
                $user->token = $token;
                unset($user->password,$user->remember_token,$user->created_at,$user->updated_at);
                return response()->json([
                    'code' => 200,
                    'msgdefault'  => 'Đăng nhập thành công',
                    'data'     => $user,
                ], 200);
            }else{
                return response()->json([
                    'code' => 200,
                    'msgdefault'  => 'Mật khẩu không chính xác',
                ], 202);
            }
        }else{
            return response()->json([
                'code' => 201,
                'msgdefault'  => 'Tài khoản mật khẩu không chính xác',
            ], 201);
        }
    }

    public function me(){
        dd(1);
    }
}
