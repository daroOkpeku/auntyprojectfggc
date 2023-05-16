<?php

namespace App\Http\Controllers;

use App\Http\Requests\accomdatereq;
use App\Http\Requests\checkreq;
use App\Http\Requests\travelreq;
use App\Http\Resources\hostelresource;
use App\Http\Resources\travelres;
use App\Models\accommdation;
use App\Models\travel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class viewController extends Controller
{


    public function signup(){
        return view('signup');
    }

    public function login(){
        return view('login');
    }

    public function confirmation($code){
        $user = User::where(['verification_code'=>$code, "status"=>0])->first();

        if($user){
            $user->update(['status'=>1]);
            return view("confirmation",['success'=>true]);
        }else{
            return view("confirmation",['success'=>false]);
        }
    }

    public function home(Request $request){
        // $value = $request->session()->get('userdetail');
        // $value =    Session::get('userdetail');
        // dd($value);
        return view('home');
    }

    public function check(checkreq $request){
      $emailorphone = filter_var($request->user, FILTER_VALIDATE_EMAIL)?'email':'phone';
     $user = User::where([$emailorphone=>$request->user])->first();
     if($user){
       return response()->json(["success"=>$user]);
     }else{
        return response()->json(["error"=>'your data does not exist']);
     }
    }

    public function accommodation(){
        return view('accommodation');
    }

    public function accommdate(accomdatereq $request){
    $acc = accommdation::where(['user_id'=>$request->user_id])->first();

    if(!$acc){
        $file_name = $request->file->getClientOriginalName();
        $request->file->storeAs('images', $file_name, 'public');
         $accomdate =  accommdation::create([
             'hostel'=>$request->hostel,
             'picture'=>$file_name,
             'user_id'=>$request->user_id
           ]);
           return response()->json(['success'=>'successful', 'data'=>$accomdate]);
    }else{
        return response()->json(['error'=>'you data already exists']);

    }

    }

    public function checkaccommodation($id){
      $acc =  accommdation::where(['user_id'=>$id])->first();
      return response()->json(['success'=>$acc]);
    }

    public function travel(){
        return view('traveldetails');
    }

    public function travelin(travelreq $request){
             $ans = $request->pickup == true?1:0;
     $travel =  travel::create([
        "date_arrival"=>Carbon::parse($request->date_arrival),
        "pickup"=>$ans,
        "port_part"=>$request->port_part,
        "time_arrival"=>Carbon::parse($request->time_arrival),
        "user_id"=>$request->user_id
       ]);
       return response()->json(['success'=>'Thank you for completing the form', 'data'=>$travel]);
    }

    public function adminloginview(){
        return view('adminlogin');
    }


    public function admindashboard(){
          //  auth()->guard('admin')->logout();
            $user =  Session::get('admindetail');
            // Session::invalidate();
            // Session::flush();

            return view('admindashboard',  ['data'=>$user]);
    }

    public function Registrants(){
     $user =  User::paginate(10);
    return response()->json(['success'=>$user]);
    }

    public function adminhotel(){
        return view('adminhotel');

    }

    public function hotel(Request $request){
        $user = User::all();
       $anshostel = hostelresource::collection($user)->resolve();
       $page = $request->get('page')?$request->get('page'):1;
       $pagdata =  $this->paginate($anshostel, 6, $page);
       return response()->json(['success'=>$pagdata]);
    }

    public function admintravel(Request $request){
        $user = User::all();
        $anstravel = travelres::collection($user)->resolve();
        $page = $request->get('page')?$request->get('page'):1;
        $pagdata =  $this->paginate($anstravel, 6, $page);
        return response()->json(['success'=>$pagdata]);
    }

    public function admintravels(){
        return view('admintravel');

    }

    public function logout(){
        auth()->guard('admin')->logout();
              Session::invalidate();
            Session::flush();
            return redirect()->route('home');
    }


}



