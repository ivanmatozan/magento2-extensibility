<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Controller\Di;

use Magento\Framework\App\Action\Context;
use Matozan\MagentoExtensibility\Controller\CustomAction;
use Matozan\MagentoExtensibility\Model\Di\Dummy;

/**
 * Class Preference
 * @package Matozan\MagentoExtensibility\Controller\Di
 */
class Preference extends CustomAction
{
    /**
     * @var Dummy
     */
    protected $dummy;

    /**
     * Preference constructor.
     * @param Dummy $dummy
     * @param Context $context
     */
    public function __construct(Dummy $dummy, Context $context)
    {
        $this->dummy = $dummy;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = $this->dummy->getResult();
        return $this->getResultRaw()->setContents($result);
    }
}
