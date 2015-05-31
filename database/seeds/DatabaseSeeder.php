<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    /**
     * @var array
     */
    private $tables = array(
        'job_user',
        'jobs',
        'users'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->cleanDatabase();

        // $this->call('ConstantsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('JobsTableSeeder');
        $this->call('JobUserTableSeeder');
    }

    public function cleanDatabase()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}