<?php

namespace Consentmanager\Cmp\Model\System\Config\Source;

class Modes implements \Magento\Framework\Option\ArrayInterface {

    public function toOptionArray() {
        return [
                ['value' => 'automatic', 'label' => __('Automatic')],
                ['value' => 'semi-automatic', 'label' => __('Semi-Automatic')],
        ];
    }
}
