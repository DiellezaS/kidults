<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function processForm(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check if the user exists with the provided email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // If user exists, redirect to cardToysCenter
            return redirect('cardToysCenter');
          
        } else {
            // If user does not exist, redirect to dati
            return redirect('dati');
         
        }
    }

    // Method to display cardToysCenter page
    public function showCardToysCenter()
    {
        return view('cardToysCenter');
    }

    // Method to display dati page
    public function showDati()
    {
        return view('dati');
    }
}