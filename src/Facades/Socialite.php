<?php

namespace Snono\Socialite\Facades;


use Illuminate\Support\Facades\Facade;
use Snono\Socialite\Contracts\Factory;

/**
 * @method static \Snono\Socialite\Contracts\Provider driver(string $driver = null)
 * @see \Snono\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
