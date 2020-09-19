<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Add new Card
    public function index(){
        return view('index');
    }

    public function availableCards(){
        return view('available_cards');
    }
    public function corruptedCards(){
        return view('corrupted_cards');
    }
    public function paybill(){
        return view('paybill');
    }
    public function usedCards(){
        return view('used_cards');
    }
    public function inquiry(){
        return view('inquiry');
    }

    public function create(Request $request){
        return $request->input();
    }

}
