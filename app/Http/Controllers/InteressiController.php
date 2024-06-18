<?php
namespace App\Http\Controllers;
use App\Models\Interessi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteressiController extends Controller
{

    public function updateInterests(Request $request)
{
    $user = Auth::user();
    $existingInterestIds = $user->interessi()->pluck('interessi_id')->toArray();
    $newlySelectedInterestIds = $request->input('interessi', []);
    $interestsToRemove = array_intersect($existingInterestIds, $newlySelectedInterestIds);
    if (!empty($interestsToRemove)) {
        $user->interessi()->detach($interestsToRemove);
    }
    // Add new interests that are selected
    $interestsToAdd = array_diff($newlySelectedInterestIds, $existingInterestIds);
    if (!empty($interestsToAdd)) {
        $interestsToAdd = Interessi::whereIn('id', $interestsToAdd)->get();
        foreach ($interestsToAdd as $interest) {
            $user->interessi()->attach($interest->id);
        }
    }
    return redirect('/card');
}
public function getUserInterests(){
    $user = Auth::user();
    $existingInterestIds = $user->interessi()->pluck('interessi_id')->toArray();
    $interessi = Interessi::all();
    return response()->json($existingInterestIds);
}
    public function checkbox()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $interessi = $user->interessi; 
            return view('components.layouts.check-toggles', compact('interessi', 'user'));
        } else {
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }
    }

    public function checkbox_form()
{
    $interessi = Interessi::all();
    $user = Auth::user(); // Retrieve the authenticated user
    return view('components.layouts.cardtoys', compact('interessi', 'user'));
}
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