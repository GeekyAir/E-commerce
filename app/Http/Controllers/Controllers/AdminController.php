<?php

namespace App\Http\Controllers\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function addCompany(Request $request)
    {
        User::create([
           'fname'=> $request->companyName,
           'lname'=>$request->ownerName,
           'commercialRecord'=> $request->commRecord,
           'taxNumber'=>$request->taxNumber,
           'commercialActivity'=>$request->commActivity,
           'location'=>$request->location,
           'birthdate'=>$request->birthdate,
           'phone'=>0,
           'email'=>null,
           'password'=>0,
           'city'=>0,
           'zipcode'=>0,
           'role_id'=>'3'

        ]);

        return redirect()->route('adminProfile')->with('success','Company Added Successfully');
    }

    public function addAssoc(Request $request)
    {
        User::create([
            'fname'=> $request->companyName,
            'lname'=>$request->ownerName,
            'commercialRecord'=> $request->commRecord,
            'taxNumber'=>$request->taxNumber,
            'commercialActivity'=>$request->commActivity,
            'location'=>$request->location,
            'birthdate'=>$request->birthdate,
            'phone'=>0,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

            'city'=>0,
            'zipcode'=>0,
            'role_id'=>'2'

         ]);
         return redirect()->route('adminProfile')->with('success','Associate Added Successfully');
    }

    public function addClient(Request $request)
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
            'company_id'=>$request->company,
            'points'=>0,
            'totalPoints'=>0,
            'password'=>0,
            'zipcode'=>0,
            'role_id'=>'4'

         ]);
         return redirect()->route('adminProfile')->with('success','Client Added Successfully');
    }
}
