<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class PageController extends Controller
{
    //Add new Card
    public function index(){
        return view('index');
        }


    public function corruptedCards(){
        return view('corrupted_cards');
    }
    public function paybill(){
        return view('paybill');
    }

    public function inquiry(){
        return view('inquiry');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'cardNumber' => 'required|min:3|unique:cards,number',
            'cardSerialNumber' => 'required|min:3|unique:cards,serialNumber',
            'cardType'=>'required|gte:5'
        ]);
        Card::create([
            'number'=>$request['cardNumber'],
            'serialNumber'=>$request['cardSerialNumber'],
            'type'=>$request['cardType'],
            'status'=>0
        ]);
        return redirect()->route('index')->with('status','Card Added Successfully!');
    }

}
