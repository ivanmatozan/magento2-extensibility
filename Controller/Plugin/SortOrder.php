<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Controller\Plugin;

use Magento\Framework\App\Action\Context;
use Matozan\MagentoExtensibility\Controller\CustomAction;
use Matozan\MagentoExtensibility\Model\Plugin\SortOrderExample;

/**
 * Class SortOrder
 * @package Matozan\MagentoExtensibility\Controller\Plugin
 */
class SortOrder extends CustomAction
{
    /**
     * @var SortOrderExample
     */
    protected $example;

    /**
     * SortOrder constructor.
     * @param SortOrderExample $example
     * @param Context $context
     */
    public function __construct(SortOrderExample $example, Context $context)
    {
        $this->example = $example;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $this->example->run();
        return $this->getResultRaw()->setContents($this->example->getLog());
    }
}
