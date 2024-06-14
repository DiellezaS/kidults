<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function processForm(Request $request)
    
    {
        if (Auth::check()) {
            return redirect('/cardToysCenter');
        }

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            Auth::login($user);
            return redirect('cardToysCenter');
        } else {
            return redirect('dati');
        }
    }


}