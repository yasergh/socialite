<?php

namespace Snono\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Snono\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
