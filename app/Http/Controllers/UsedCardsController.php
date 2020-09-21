<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class UsedCardsController extends Controller
{
    public function index(){
        $used_cards=Card::where('status',1)->orderBy('updated_at')->get();
        $type_numbers=['5'=>0,'10'=>0,'15'=>0,'25'=>0,'30'=>0,'40'=>0,'50'=>0,'60'=>0,'75'=>0,'100'=>0,'150'=>0,'totalAmount'=>0];


        foreach ($used_cards as $card){
            switch ($card['type']){
                case 5:$type_numbers['5']=$type_numbers['5']+1;break;
                case 10:$type_numbers['10']=$type_numbers['10']+1;break;
                case 15:$type_numbers['15']=$type_numbers['15']+1;break;
                case 25:$type_numbers['25']=$type_numbers['25']+1;break;
                case 30:$type_numbers['30']=$type_numbers['30']+1;break;
                case 40:$type_numbers['40']=$type_numbers['40']+1;break;
                case 50:$type_numbers['50']=$type_numbers['50']+1;break;
                case 60:$type_numbers['60']=$type_numbers['60']+1;break;
                case 75:$type_numbers['75']=$type_numbers['75']+1;break;
                case 100:$type_numbers['100']=$type_numbers['100']+1;break;
                case 150:$type_numbers['150']=$type_numbers['150']+1;break;
            }
        }
        $type_numbers['totalAmount']=
            5*$type_numbers['5']
            +10*$type_numbers['10']
            +15*$type_numbers['15']
            +25*$type_numbers['25']
            +30*$type_numbers['30']
            +40*$type_numbers['40']
            +50*$type_numbers['50']
            +60*$type_numbers['60']
            +75*$type_numbers['75']
            +100*$type_numbers['100']
            +150*$type_numbers['150'];

        return view('used_cards')->with(['used_cards'=>$used_cards,'givenDate'=>0,'type_numbers'=>$type_numbers]);
    }
    public function date(Request $request){

        $chosen_date=$request['date'];
        $used_cards=Card::where('status',1)->where('updated_at',$chosen_date)->get();
        $type_numbers=['5'=>0,'10'=>0,'15'=>0,'25'=>0,'30'=>0,'40'=>0,'50'=>0,'60'=>0,'75'=>0,'100'=>0,'150'=>0,'totalAmount'=>0];
        foreach ($used_cards as $card){
            switch ($card['type']){
                case 5:$type_numbers['5']=$type_numbers['5']+1;break;
                case 10:$type_numbers['10']=$type_numbers['10']+1;break;
                case 15:$type_numbers['15']=$type_numbers['15']+1;break;
                case 25:$type_numbers['25']=$type_numbers['25']+1;break;
                case 30:$type_numbers['30']=$type_numbers['30']+1;break;
                case 40:$type_numbers['40']=$type_numbers['40']+1;break;
                case 50:$type_numbers['50']=$type_numbers['50']+1;break;
                case 60:$type_numbers['60']=$type_numbers['60']+1;break;
                case 75:$type_numbers['75']=$type_numbers['75']+1;break;
                case 100:$type_numbers['100']=$type_numbers['100']+1;break;
                case 150:$type_numbers['150']=$type_numbers['150']+1;break;
            }
        }
        $type_numbers['totalAmount']=
            5*$type_numbers['5']
            +10*$type_numbers['10']
            +15*$type_numbers['15']
            +25*$type_numbers['25']
            +30*$type_numbers['30']
            +40*$type_numbers['40']
            +50*$type_numbers['50']
            +60*$type_numbers['60']
            +75*$type_numbers['75']
            +100*$type_numbers['100']
            +150*$type_numbers['150'];
        return view('used_cards')->with(['used_cards'=>$used_cards,'givenDate'=>$chosen_date,'type_numbers'=>$type_numbers]);

    }
}
