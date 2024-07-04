<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newComic = new Comic();
        // $newComic->title = 'Batman';
        // $newComic->description = 'Thirty years ';
        // $newComic->thumb = "https://imgs.search.brave.com/a6fAPUra4t94xMJFlYv6X7Lwm4z_qPmslx7Hiqafbok/rs:fit:600:923:1/g:ce/aHR0cHM6Ly9jZG4u/ZmxpY2tlcmluZ215/dGguY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIwLzA4L0Jh/dG1hbi1UaHJlZS1K/b2tlcnMtMS02MDB4/OTIzLTEuanBn";
        // $newComic->price = 6.99;
        // $newComic->series = 'Batman: Three Jokers';
        // $newComic->sale_date = '2020-08-25';
        // $newComic->type = 'comic book';
        // $newComic->artist = 'Jason Fabok';


        $newComic = new Comic();
        $newComic->title = $faker->sentence(2);
        $newComic->description = $faker->sentence(6);
        $newComic->thumb = 'https://picsum.photos/id/' . $faker->numberBetween(1, 700) . '/540/540';
        $newComic->price = $faker->randomFloat(2, 0.99, 10.99);
        $newComic->series = $faker->sentence();
        $newComic->sale_date = $faker->date();
        $newComic->type = $faker->word();
        $newComic->artist = $faker->name();

        $newComic->save();
    }
}
