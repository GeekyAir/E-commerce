<?php

namespace App\Http\Controllers\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserPoint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' =>'required',
            'lname' =>'required',
            'email' =>'required|email',
            'password'=>'required',
            'city'=>'required',
            'zipcode'=>'required',
            'phone'=>'required'

        ]);


            $user = new User();

            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->password =Hash::make($request->password);
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->zipcode = $request->zipcode;
            $user->city = $request->city;
            $user->role_id = '1';
            $user->save();

        return response()->json($user);
    }

    public function login(Request $request)
    {


         if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
         {

            return redirect()->route('market');
         }
         else
         {
            return back()->with('error','Wrong Email or Password');
         }

    }

    public function clientProfile()
    {
        return view('client.profile');
    }

    public function registerClient()
    {
        return view('client.add_client');
    }


 // -------------------------------------

    public function assocProfile($id)
    {
        if($id != auth()->id())
        {
            return abort(401);
        }
        $assoc = User::find($id);
        $users = User::where('company_id',$id)->get();

        if(!$assoc||$assoc->role_id != 2)
        {
           return abort(404);
        }

        return view('associate.assoc-profile',[
            'assoc'=>$assoc,
            'users'=>$users
        ]);
    }

    public function addAssocClient(Request $request)
    {
        User::create([
            'fname'=> $request->name,
            'lname'=>0,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'id_number'=>$request->id,
            'socialStatus'=>$request->socialStatus,
            'anotherPhone'=>$request->anotherPhone,
            'family_members'=>$request->familyCount,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'location'=>$request->location,
            'password'=>0,
            'zipcode'=>0,
            'role_id'=>'4',
            'points'=>0,
            'totalPoints'=>0,
            'company_id'=>$request->company

         ]);

         return redirect()->route('assocProfile',auth()->id())->with('success','Client added Successfully');
    }

    public function getInfo($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function addPoints(Request $request)
    {
        UserPoint::create([
            'user_id'=>$request->userId,
            'company_id'=>$request->companyId,
            'chargedValue'=>$request->points,
        ]);

        $user = User::find($request->userId);
        $user->points += $request->points;
        $user->save();

        return redirect()->route('assocProfile',auth()->id())->with('success','Points added Successfully');
    }
//-------------------------------------------------------
    public function companyProfile()
    {
        return view('company.service-provider-profile');
    }
//------------------------------------------
    public function adminProfile()
    {
        $companies = User::where('role_id','2')->get();

        return view('admin.malco-profile',[
            'companies'=>$companies
        ]);
    }
}
