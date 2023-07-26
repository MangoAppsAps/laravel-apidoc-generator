<?php

namespace Mpociot\ApiDoc\Tests\Fixtures;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return TestUserFactory::new();
    }
}
