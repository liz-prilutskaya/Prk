<?php
namespace Prk\Task\Block;
class Index extends \Magento\Framework\View\Element\Template
{
    public function printText()
    {
        return __('It\'s a page.');
    }
}