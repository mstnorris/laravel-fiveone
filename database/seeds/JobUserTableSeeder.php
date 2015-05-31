<?php

use FiveOne\Job;
use FiveOne\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class JobUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $jobIds = Job::lists('id');
        $userIds = User::lists('id');

        foreach(range(1,30) as $index)
        {
            DB::table('job_user')->insert([
                'job_id' => $faker->randomElement($jobIds),
                'user_id' => $faker->randomElement($userIds)
            ]);
        }
    }
}
