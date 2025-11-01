<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  $table->id();
    //  $table->string('name');
    //  $table->string('model');
    //  $table->integer('year');
    //  $table->decimal('price', 8, 2);
    //  $table->boolean('is_used');
    //  $table->timestamps();

    public function run()
    {
        Car::create([
            'name' => 'Brio',
            'model' => 'RS',
            'year' => 2009,
            'price' => 100000.00,
            'is_used' => true
        ]);
    }
}
