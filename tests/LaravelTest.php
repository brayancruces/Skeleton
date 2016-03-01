<?php

/*
 * This file is part of :package_name.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Package\Test;

/**
 * Class LaravelTest.
 */
class LaravelTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        // Your code here
    }

    /**
     * Test that true does in fact equal true.
     *
     * @test
     */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['DraperStudio\Package\ServiceProvider'];
    }

    /**
     * Get package aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return ['Package' => 'DraperStudio\Package\Facades\Package'];
    }
}
