<?php

namespace Pashkevich\PhoneVerification\Tests;

use Orchestra\Testbench\TestCase;
use Pashkevich\PhoneVerification\PhoneVerificationServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [PhoneVerificationServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
