<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

/**
 * Class CustomAction
 * @package Matozan\MagentoExtensibility\Controller
 */
abstract class CustomAction extends Action
{
    /**
     * @return Raw
     */
    public function getResultRaw(): Raw
    {
        return $this->resultFactory->create(ResultFactory::TYPE_RAW);
    }

    /**
     * @return Page
     */
    public function getResultPage(): Page
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

    /**
     * @return Json
     */
    public function getResultJson(): Json
    {
        return $this->resultFactory->create(ResultFactory::TYPE_JSON);
    }
}
