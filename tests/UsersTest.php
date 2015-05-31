<?php

class UsersTest extends TestCase
{

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
        return factory('FiveOne\User')->create();
    }
}
