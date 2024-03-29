<?php

/*
 * This file is part of Laravel :package_name.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Package;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSomeFactoryIsInjectable()
    {
        $this->assertIsInjectable(SomeFactory::class);
    }
}
