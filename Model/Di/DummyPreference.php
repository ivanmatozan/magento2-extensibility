<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Model\Di;

/**
 * Class DummyPreference
 * @package Matozan\MagentoExtensibility\Model\Di
 */
class DummyPreference extends Dummy
{
    /**
     * @inheritDoc
     */
    protected function calculate(int $number): int
    {
        return parent::calculate($number);
    }
}
