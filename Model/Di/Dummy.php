<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Model\Di;

/**
 * Class DummyOne
 * @package Matozan\MagentoExtensibility\Model\Di
 */
class Dummy
{
    /**
     * Do something.
     */
    public function getResult(): string
    {
        // do something

        // do something else

        $number = $this->calculate(21);

        // still doing something

        return "Number is: {$number}";
    }

    /**
     * @param int $number
     * @return int
     */
    protected function calculate(int $number): int
    {
        return $number * 2;
    }
}
