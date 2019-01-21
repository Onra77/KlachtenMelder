<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
      $rules = $this->rules();
      $validatedData = $request->validate($rules);

      // The blog post is valid...
      echo"Bericht verzonden.</br> Indien nodig nemen we z.s.m. contact met u op.</br> Bedankt voor uw bericht.";
    }

    public function rules()
    {
      return [
        'name'    => 'required',
        'email'   => 'required|email',
        'msg'     => 'required'
      ];
    }
}
