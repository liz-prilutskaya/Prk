<?php

namespace Prk\Task\Model;

class Data extends \Magento\Framework\Model\AbstractModel
{
    public $scopeConfig;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getURL()
    {
        return $this->scopeConfig->getValue('task/general/display_text');
    }
}
