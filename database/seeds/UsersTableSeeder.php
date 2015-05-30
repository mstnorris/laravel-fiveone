<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('FiveOne\User', 50)->create()->each(function($u) {
            $u->string_id = Hashids::connection('string_id')->encode($u->id);
            $u->save();
        });
    }
}
