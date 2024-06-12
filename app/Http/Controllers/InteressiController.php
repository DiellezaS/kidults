<?php
namespace App\Http\Controllers;
use App\Models\Interessi;
use Illuminate\Http\Request;
class InteressiController extends Controller
{
    public function checkbox()
    {
        $interessi = Interessi::all();
        return view('components.layouts.check-toggles', ['interessi'=> $interessi]);
    }
    public function checkbox_form()
    {
        $interessi = Interessi::all();
        return view('components.layouts.cardtoys', ['interessi'=> $interessi]);
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