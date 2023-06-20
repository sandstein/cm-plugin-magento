<?php
namespace Consentmanager\Cmp\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public $resource = '';
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\ResourceConnection $resource
    ) {
        parent::__construct($context);
        $this->resource = $resource;
    }
    
    public function getStoreConfig($path)
    {
        return $this->scopeConfig->getValue(
            $path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    
    public function isEnabled()
    {
        return $this->getStoreConfig('cmp/settings/active');
    }
    
    public function getCMPId()
    {
        return $this->getStoreConfig('cmp/settings/cmp_id');
    }
	
    public function getBlockingMode()
    {
        return $this->getStoreConfig('cmp/settings/blocking_mode');
    }
    
    public function getCustomHtml()
    {
        return $this->getStoreConfig('cmp/settings/custom_html');
    }
    
    public function getCdn()
    {
        return $this->getStoreConfig('cmp/settings/cdn');
    }
    
    public function getHost()
    {
        return $this->getStoreConfig('cmp/settings/host');
    }
}
