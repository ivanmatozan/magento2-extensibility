<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Model\Plugin;

/**
 * Class SortOrderExample
 * @package Matozan\MagentoExtensibility\Model\Plugin
 */
class SortOrderExample
{
    /**
     * @var string[]
     */
    private $log = [];

    /**
     * @return void
     */
    public function run(): void
    {
        $this->addLog(__METHOD__);
    }

    /**
     * @param string $entry
     * @return void
     */
    public function addLog(string $entry): void
    {
        $this->log[] = $entry;
    }

    /**
     * @return string
     */
    public function getLog(): string
    {
        return implode('<br>', $this->log);
    }
}
