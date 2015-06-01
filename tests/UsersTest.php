<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function it_fetches_users()
    {
        // arrange
        $user = $this->addUser();

        // act
        $this->get('api/v1/users')
        ->seeJson($user->toArray());

        // assert
        $this->assertResponseOk();
    }

    private function addUser()
    {
        return $users = factory('FiveOne\User', 3)
            ->create()
            ->each(function($u) {
                $u->string_id = Hashids::connection('string_id')->encode($u->id);
                $u->save();
            });
    }
}
