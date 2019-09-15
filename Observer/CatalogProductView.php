<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class CatalogProductView
 * @package Matozan\MagentoExtensibility\Observer
 */
class CatalogProductView implements ObserverInterface
{
    /**
     * @inheritDoc
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Catalog\Controller\Product\View $controllerAction */
        $controllerAction = $observer->getEvent()->getData('controller_action');
        /** @var \Magento\Framework\App\RequestInterface $request */
        $request = $observer->getRequest();

        // do something
    }
}
