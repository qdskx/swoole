<?php

namespace Psr\SimpleCache;

/**
 * Exception interfaces for invalid cache arguments.
 *
 * When an invalid argument is passed it must throw an exception which implements
 * this interfaces
 */
interface InvalidArgumentException extends CacheException
{
}
