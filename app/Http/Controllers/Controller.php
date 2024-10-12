<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function login() {
        return view("validate/login");
    }

    function welcome() {
        return view("content/welcome");
    }

    function competition() {
        return view("content/competition");
    }
    
    function about() {
        return view("content/about");
    }

    function register() {
        return view("content/register");
    }
    
    function faq() {
        return view("content/faq");
    }

    function registerScrabble() {
        return view("content/registerScrabble");
    }

    function registerNewscasting() {
        return view("content/registerNewscasting");
    }
    
    function registerSpeech() {
        return view("content/registerSpeech");
    }

    function registerDebate() {
        return view("content/registerDebate");
    }

    function opsiRegister() {
        return view("content/opsiRegister");
    }

    // Admin
    function admindashboard()
    {
        return view("admin/dashboard");
    }

    function adminexport()
    {
        return view("admin/export-data");
    }

    function adminmanage()
    {
        return view("admin/manage-account");
    }
}
