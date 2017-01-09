<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function getIndex(){

        $posts=Post::orderBy('created_at','desc')
                    ->limit(4)->get();

                $data['abouts']=    


        $active="home";
        return view('pages.welcome')->withPosts($posts);


    }

    public function getAbout(){


        $fName='pawan';
        $lName='Chaurasia';

        $full=$fName." ".$lName;
        $email='rjsnh1522@gmail.com';
        $data['fullName']=$full;
        $data['email']=$email;



        return view('pages.about')->withData($data);
    }


    public function getContact(){

        return view('pages.contact');
    }

}
