<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $email = $request->input('email');

        // Check if email exists in the database
        $user = User::where('email', $email)->first();

        if ($user) {
            return redirect()->route('cardToysCenter');
        } else {
            return redirect()->route('dati');
        }
    }
}
