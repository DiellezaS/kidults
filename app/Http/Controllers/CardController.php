<?php
namespace App\Http\Controllers;

use App\Models\Interessi;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller{
    public function card()
    {
        
        if (!Auth::check()) {
        return redirect('/');
    }
    else{
        return view('card');
    }
    }


    public function personCard()
    {
        if (!Auth::check()) {
        return redirect('/');
    }
    else{
        return view('personCard');
    }
    }
}