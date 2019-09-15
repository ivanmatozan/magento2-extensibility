<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Model\Di;

/**
 * Class UnluckyDummy
 * @package Matozan\MagentoExtensibility\Model\Di
 */
class UnluckyDummy extends Dummy
{
    /**
     * @inheritDoc
     */
    protected function calculate(int $number): int
    {
        return 13;
    }
}
