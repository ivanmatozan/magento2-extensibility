<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Model;

use Matozan\MagentoExtensibility\Api\FooInterface;

/**
 * Class Foo
 * @package Matozan\MagentoExtensibility\Model
 */
class Foo implements FooInterface
{
    /**
     * @inheritDoc
     */
    public function getClassName(): string
    {
        return __CLASS__;
    }

    /**
     * @inheritDoc
     */
    public function run($one, $two = null): array
    {
        return [
            'one' => $one,
            'two' => $two
        ];
    }
}
