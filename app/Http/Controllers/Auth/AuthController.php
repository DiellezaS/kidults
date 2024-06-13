<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Interessi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'negozio' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'date' => 'required|string|max:255',
        'cellulare'=>'nullable|string',
        'gender'=>'nullable|string',
        'indirizzo'=>'nullable|string',
        'nr_civico'=>'nullable|string',
        'cap'=>'nullable|string',
        'provinca'=>'nullable|string',
    ]);
    if ($validator->fails()) {
        return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
    }
    $user = User::create([
        'negozio' => $request->get('negozio'),
        'lastname' => $request->get('lastname'),
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'date' => $request->get('date'),
        'cellulare'=> $request->get('cellulare'),
        'gender'=> $request->get('gender'),
        'indirizzo'=> $request->get('indirizzo'),
        'nr_civico'=> $request->get('nr_civico'),
        'cap'=> $request->get('cap'),
        'provinca'=> $request->get('provinca'),
    ]);


    if ($request->has('interessi')) {
        $interests = Interessi::whereIn('id', $request->input('interessi'))->get();
        $user->choices()->attach($interests);
    }





 if (Auth::check()) {
    return redirect('/personCard');
}
  
}





}