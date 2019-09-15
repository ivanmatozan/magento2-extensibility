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
     * @var int
     */
    protected $multiplier;

    /**
     * Dummy constructor.
     * @param int $multiplier
     */
    public function __construct(int $multiplier = 2)
    {
        $this->multiplier = $multiplier;
    }

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
        return $number * $this->multiplier;
    }
}
