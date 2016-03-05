<?php

/*
 * This file is part of Laravel :package_name.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Package\Facades;

use DraperStudio\Package\Facades\Package;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use GrahamCampbell\Tests\Markdown\AbstractTestCase;

/**
 * This is the facade test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'alias';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Package::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return BehindTheFacade::class;
    }
}
