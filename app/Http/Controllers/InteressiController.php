<?php
namespace App\Http\Controllers;
use App\Models\Interessi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteressiController extends Controller
{

    public function updateInteressi(Request $request) {
        $user = Auth::user();
        $userId = $user->id;
        if ($request->has('interessi')) {
            $selectedInteressi = $request->input('interessi');
            $userId->choices()->detach();
            $userId->choices()->sync($selectedInteressi);
        }
        return redirect()->back()->with('success', 'Interests updated successfully.');
    }
    // public function checkbox()
    // {
    //     $interessi = Interessi::all();
    //     $user = Auth::user(); 
    //     return view('components.layouts.check-toggles', ['interessi' => $interessi, 'user' => $user]);
    
    //     // $interessi = Interessi::all();
    //     // return view('components.layouts.check-toggles', ['interessi'=> $interessi]);
    // }

    public function checkbox()
    {
        if (Auth::check()) {
            $user = Auth::user(); 
            $interessi = Interessi::all();
            return view('components.layouts.check-toggles', compact('interessi', 'user'));
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }
    }
    public function checkbox_form()
{
    $interessi = Interessi::all();
    $user = Auth::user(); // Retrieve the authenticated user
    return view('components.layouts.cardtoys', compact('interessi', 'user'));
}


    // public function checkbox_form()
    // {
    //     $interessi = Interessi::all();
    //     return view('components.layouts.cardtoys', ['interessi'=> $interessi]);
    // }
    public function pg2Section()
    {
        $interessi = Interessi::all();
        return view('components.layouts.page2-section', ['interessi' => $interessi]);
    }
    public function pg2()
    {
        $interessi = Interessi::all();
        return view('cardToysCenter', ['interessi' => $interessi]);
    }
    public function dati()
    {
        $interessi = Interessi::all();
        return view('dati', ['interessi' => $interessi]);
    }
    public function pg3_form()
    {
        $interessi = Interessi::all();
        return view('components.layouts.pg3-form', ['interessi' => $interessi]);
    }
}