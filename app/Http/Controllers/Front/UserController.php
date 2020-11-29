<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName(){
        return 'Ahmed Ouf';
    }

    public function getIndex(){

        $data['id']=1;
        $data['name']='Ahmed Ouf';

        $obj = new \stdClass();

        $obj-> name='Ali';
        $obj-> id=2;
        $obj-> gender='Male';

        //$test5=[]; //there is a mistake here my by caused by versions

        return view('welcome',$data,compact('obj'));
}
}
