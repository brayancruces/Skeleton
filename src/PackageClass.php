<?php

/*
 * This file is part of :package_name.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Package;

/**
 * This is the package class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class PackageClass
{
    /**
     * Create a new Package Instance.
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome.
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
