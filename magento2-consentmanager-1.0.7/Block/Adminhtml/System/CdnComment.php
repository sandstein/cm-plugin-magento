<?php

namespace Consentmanager\Cmp\Block\Adminhtml\System;

use Magento\Framework\View\Element\AbstractBlock;
use Magento\Config\Model\Config\CommentInterface;

class CdnComment extends AbstractBlock implements CommentInterface
{
    public function getCommentText($elementValue)
    {
        $image_url = $this->getViewFileUrl('Consentmanager_Cmp::images/cmpcdn.png');
        return '<img src="'.$image_url.'"/>';
    }
}
