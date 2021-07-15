<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolydaysTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayHoliday = config('holiday');

        foreach ($arrayHoliday as $item) {
            //creo nuovo oggetto
            $holiday = new Holiday();
            //valorizzare proprietà oggetto
            $holiday->package_name = $item["package_name"];
            $holiday->destination_country = $item["destination_country"];
            $holiday->region = $item["region"];
            $holiday->city = $item["city"];
            $holiday->{'hotel/resort'} = $item["hotel/resort"];
            $holiday->{'hotel/resort_address'} = $item["hotel/resort_address"];
            $holiday->airport_department = $item["airport_department"];
            $holiday->airport_arrival = $item["airport_arrival"];
            $holiday->airport_shuttle = $item["airport_shuttle"];
            $holiday->all_inclusive = $item["all_inclusive"];
            $holiday->reccomended_for = $item["reccomended_for"];
            $holiday->description = $item["description"];
            $holiday->price = $item["price"];

            //salvo l'oggetto
            $holiday->save();
        }
    }
}
