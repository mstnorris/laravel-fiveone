<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('FiveOne\Job', 50)->create()->each(function($u) {
            $u->string_id = Hashids::connection('job_id')->encode($u->id);
            $u->save();
        });
    }
}
