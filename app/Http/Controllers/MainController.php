<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function mainPage()
    {
        $users = User::all()->where('social_level', '=',  3 );
        return view('main.main', compact(['users']));
    }

    public function contact()
    {
        $user = User::all();
        return view('main.contact');
    }

    public function teacherList()
    {
        $users = User::all();
        return view('main.teacher_list', compact(['users']));
    }

    public function subscribe(Request $request)
    {
        $subscribe = new Subscribe;
        $subscribe ->name = $request->name;
        $subscribe ->lastname = $request->lastname;
        $subscribe ->email = $request->email;
        $subscribe ->number = $request->number;
        $subscribe ->text = $request->text;
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'number' => 'required',
            'text' => 'required',
        ]);
        $subscribe->save();
        return redirect()->back();
    }

    public function search(Request $req)
    {  
            $users= User::where('user_status','=','რეპეტიტორი')->get();

            if ($req->input('max-price') != '' & $req->input('max-price') != null & $req->input('max-price') != 0) {
                $users= User::where('price','<=',$req->input('max-price'))->get();
            }
            if ($req->input('homework-dayse') != '' & $req->input('homework-days') != null & $req->input('homework-days') != 0) {
                $users= User::where('homework-days','=',$req->input('homework-days'))->get();
            }
            if ($req->input('lesson-hours') != '' & $req->input('lesson-hours') != null & $req->input('lesson-hours') != 0) {
                $users= User::where('hours','=',$req->input('lesson-hours'))->get();
            }
            if ($req->input('school-subject') != '' & $req->input('school-subject') != null) {
                $users= User::where('school_subject','=',$req->input('school-subject'))->get();
            }
            if ($req->input('certified') != '' & $req->input('certified') != null) {
                $users= User::where('Certified','=',$req->input('certified'))->get();
            }
            if ($req->input('experience') != '' & $req->input('experience') != null) {
                $users= User::where('experience','=<',$req->input('experience'))->get();
            }
            if ($req->input('lesson-format') != '' & $req->input('lesson-format') != null) {
                $users= User::where('homework_address','=',$req->input('lesson-format'))->get();
            }
            if ($req->input('school-level') != '' & $req->input('school-level') != null) {
                $users= User::where('school_level','=',$req->input('school-level'))->get();
            }
            return view('main.search', compact(['users'])); 
    }
}
