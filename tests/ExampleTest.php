<?php

namespace Esupl\LaravelPhoneVerification\Tests;

use Orchestra\Testbench\TestCase;
use Esupl\LaravelPhoneVerification\LaravelPhoneVerificationServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPhoneVerificationServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
