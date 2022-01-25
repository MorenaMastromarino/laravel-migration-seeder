<?php

use App\Travel;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){
            $new_travel = new Travel();

            $new_travel->departure_date = $faker->date();
            $new_travel->departure_city = $faker->city();
            $new_travel->destination_country = $faker->country();
            $new_travel->destination_city = $faker->city();
            $new_travel->accomodation = $faker->text(30);
            $new_travel->accomodation_address = $faker->streetAddress();
            $new_travel->room_type = $faker->randomElement(['singola','doppia','tripla', 'quadrupla']);
            $new_travel->duration = $faker->numberBetween(1,60);
            $new_travel->return_date = $faker->date();
            $new_travel->description = $faker->text(100);
            $new_travel->price = $faker->randomFloat(2, 100, 900000);

            $new_travel->save();
        }
    }
}
