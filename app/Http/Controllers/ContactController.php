<?php

namespace App\Http\Controllers;

use App\Page_contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Page_contact::where('id', '1')->first();

        return view('contact', compact('contacts'));
    }
}
