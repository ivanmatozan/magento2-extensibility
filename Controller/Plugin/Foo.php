<?php

declare(strict_types=1);

namespace Matozan\MagentoExtensibility\Controller\Plugin;

use Magento\Framework\App\Action\Context;
use Matozan\MagentoExtensibility\Api\FooInterface;
use Matozan\MagentoExtensibility\Controller\CustomAction;

/**
 * Class Foo
 * @package Matozan\MagentoExtensibility\Controller\Plugin
 */
class Foo extends CustomAction
{
    /**
     * @var FooInterface
     */
    protected $foo;

    /**
     * Foo constructor.
     * @param FooInterface $foo
     * @param Context $context
     */
    public function __construct(FooInterface $foo, Context $context)
    {
        $this->foo = $foo;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $data = $this->foo->run('first', 'second');
        return $this->getResultJson()->setData($data);
    }
}
