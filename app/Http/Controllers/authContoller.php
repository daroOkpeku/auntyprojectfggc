<?php

namespace App\Http\Controllers;

use App\Events\Regevent;
use App\Http\Requests\loginreq;
use App\Http\Requests\registerreq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authContoller extends Controller
{

    public function createprofile(registerreq $request){
        $user = User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "lastname"=>$request->lastname,
                "phone"=>$request->phone,
                "chapter"=>$request->chapter,
                "set"=>$request->set,
                "house"=>$request->house,
                "t_shirttop"=>$request->t_shirttop,
                "food_allergies"=>$request->food_allergies,
                "medical_conditions"=>$request->medical_conditions
            ]);
            return response()->json(['success'=>$user]);
    }

    public function login(loginreq $request){
           if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'status'=>1])){
             Session::push('userdetail', auth()->user());
            return response()->json([
                'code'=>200,
                'success'=>'you have logged in successfully',
            ]);
           }else{
            return response()->json(['error'=>'please insert the correct password or email']);
          }
    }


    public function adminlogin(loginreq $request){
        if(auth()->guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = auth()->guard('admin')->user();
            Session::push('admindetail', $user);
            return response()->json([
                'code'=>200,
                'success'=>'you have logged in successfully',
                'data'=> $user
            ]);

        }else{
            return response()->json(['error'=>'please insert the correct password or email']);
          }

    }

}
