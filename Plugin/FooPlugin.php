<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Plugin;

use Matozan\MagentoExtensibility\Api\FooInterface;

/**
 * Class FooPlugin
 * @package Matozan\MagentoExtensibility\Plugin
 */
class FooPlugin
{
    /**
     * @param FooInterface $subject
     * @param mixed $one
     * @param mixed $two
     * @return void|array
     */
    public function beforeRun(FooInterface $subject, $one, $two = null)
    {
        // do something
        return [$one, $two];
    }

    /**
     * @param FooInterface $subject
     * @param callable $proceed
     * @param mixed $one
     * @param mixed $two
     * @return array
     */
    public function aroundRun(FooInterface $subject, callable $proceed, $one, $two = null): array
    {
        // do something before
        $result = $proceed($one, $two);
        // do something after

        return $result;
    }

    /**
     * @param FooInterface $subject
     * @param array $result
     * @param mixed ...$args
     * @return array
     */
    public function afterRun(FooInterface $subject, array $result, ...$args): array
    {
        // do something
        return $result;
    }
}
