<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
    ]);
    if ($validator->fails()) {
        return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
    }
    $user = new User([
        'negozio' => $request->get('negozio'),
        'lastname' => $request->get('lastname'),
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'date' => $request->get('date'),
    ]);
    $user->save();
    return redirect('/')->with('message', 'Registered successfully, please login...');
}
}   