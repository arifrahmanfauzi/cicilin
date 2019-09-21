<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){
    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        $user = Auth::user();
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        return response()->json(['success' => $success], $this-> successStatus);
    }
    else{
        return response()->json(['error'=>'Unauthorised'], 401);
    }
    }
    public function register(Request $request){
    // Validasi Inputan yang masuk
  $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required',
      'c_password' => 'required|same:password',
  ]);

    if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);
    }

    //   DB::table('users')->insert([
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'password' => $request->input('password'),
    //   ]);
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    //$user->createToken('MyApp')-> accessToken;
    $success['token'] =  $user->createToken('api_token')-> accessToken;
    $success['name'] =  $user->name;
    return response()->json(['success'=>$success], $this-> successStatus);
}
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }


}
