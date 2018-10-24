<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInternalType()
    {
        $user = User::inrandomorder()->first();
        $this->assertInternalType('int', $user->id);

       // $this->assertClassHasAttribute('fillable', 'App\User');
      //  $this->assertEquals($user->id,$user->id);
    }



}


