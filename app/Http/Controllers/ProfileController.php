<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profileMain()
    {
        return view('main.profile.profile');
    }

    public function profileEdit()
    {
        return view('main.profile.edit_profile');
    }
    public function profileEditPut(Request $request, $id){
        $user = User::find($id);
        $user->name= $request->name;
        $user->lastname= $request->lastname;
        $user->email= $request->email;
        $user->number= $request->number;
        $user->school_subject= $request->school_subject;
        $user->school_status= $request->school_status;
        $user->school_level= $request->school_level;
        $user->Certified= $request->Certified;
        $user->description= $request->description;
        $user->country= $request->country;
        $user->price= $request->price;
        $user->hours= $request->hours;
        $user->number_days= $request->number_days;
        $user->homework_address= $request->homework_address;
        $user->experience= $request->experience;
        if($request->hasfile('Certified_file')){
            $destination='img/'.$user->Certified_file;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file =$request->file('Certified_file');
            $extention =$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/',$filename);
            $user->Certified_file= "$filename";
        }
        if($request->hasfile('photo')){
            $destination='img/'.$user->Certified_file;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file =$request->file('photo');
            $extention =$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/',$filename);
            $user->photo= "$filename";
        }
        $user->update();
        return redirect('profile/main');
    }

    public function usersPage($id){
        $user = User::find($id);
        return view('main.profile.users_page', compact(['user']));
    }


}
