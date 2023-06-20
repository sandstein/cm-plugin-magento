<?php

namespace Consentmanager\Cmp\Block;

class Head extends \Magento\Framework\View\Element\Template
{
    protected $helper;

    public function __construct(
        \Consentmanager\Cmp\Helper\Data $helper,
        \Magento\Catalog\Block\Product\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }
    
    public function getHelper()
    {
        return $this->helper;
    }
}
