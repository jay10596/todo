<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodosSeeder extends Seeder
{
    public function run()
    {
        factory(Todo::class, 7)->create();
    }
}
