<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Plugin\SortOrder;

use Matozan\MagentoExtensibility\Model\Plugin\SortOrderExample;

/**
 * Class PluginB
 * @package Matozan\MagentoExtensibility\Plugin\SortOrder
 */
class PluginB
{
    /**
     * @param SortOrderExample $subject
     * @return void
     */
    public function beforeRun(SortOrderExample $subject): void
    {
        $subject->addLog(__METHOD__);
    }

    /**
     * @param SortOrderExample $subject
     * @param callable $proceed
     * @return void
     */
    public function aroundRun(SortOrderExample $subject, callable $proceed): void
    {
        $subject->addLog(__METHOD__ . ' (before proceed)');
        $proceed();
        $subject->addLog(__METHOD__ . ' (after proceed)');
    }

    /**
     * @param SortOrderExample $subject
     * @return void
     */
    public function afterRun(SortOrderExample $subject): void
    {
        $subject->addLog(__METHOD__);
    }
}
