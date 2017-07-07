<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UserRoleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * @test
     */
    public function it_assigns_multiple_roles_to_a_user()
    {
        $user = factory('App\User')->create([

            'password'=> app('hash')->make('12345')]);

        $roles = factory('App\Role',2)->create();

        $user->roles()->attach($roles);

        $user->save();

        $this->seeInDatabase('users',['email'=> $user->email]);


    }
}
