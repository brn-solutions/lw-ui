<?php

namespace BrnSolutions\LwUi\Tests;

use BrnSolutions\LwUi\Providers\LwUiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LwUiServiceProvider::class];
    }
}
