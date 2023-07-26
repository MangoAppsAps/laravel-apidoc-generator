<?php

namespace Mpociot\ApiDoc\Tests\Fixtures;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mpociot\ApiDoc\Tests\Fixtures\TestUser;

class TestUserFactory extends Factory
{
    protected $model = TestUser::class;

    public function definition()
    {
        return [
            'id' => 4,
            'first_name' => 'Tested',
            'last_name' => 'Again',
            'email' => 'a@b.com',
        ];
    }
}
