<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $email = "rgabriel@wup.edu.ph";
        $name = "Raniel";
        return view('users.profile')
            ->with("email", $email)
            ->with("name", $name);
    }
}
