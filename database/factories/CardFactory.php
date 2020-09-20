<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types=[5,10,15,25,30,40,50,60,75,100,150];
        $type_number=array_rand($types);
        $type=$types[$type_number];
        $number=rand(100,99999);
        $serialNumber=rand(100,99999);
        $status=rand(0,2);
        return [
            'type'=>$type,
            'number'=>$number,
            'serialNumber'=>$serialNumber,
            'status'=>$status
            //
        ];
    }
}
