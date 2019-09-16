<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Api;

/**
 * Interface FooInterface
 * @package Matozan\MagentoExtensibility\Api
 */
interface FooInterface
{
    /**
     * @return string
     */
    public function getClassName(): string;

    /**
     * @param mixed $one
     * @param mixed $two
     * @return array
     */
    public function run($one, $two = null): array;
}
