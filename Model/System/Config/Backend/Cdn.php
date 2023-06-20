<?php

namespace Consentmanager\Cmp\Model\System\Config\Backend;

class Cdn extends \Magento\Framework\App\Config\Value {

    public function beforeSave() {
        $value = $this->getValue();
        $value = trim($value);
        if ($value == '') {
            $value = 'cdn.consentmanager.net';
        } else {
            $value = $this->removeHttp($value);
        }

        $this->setValue($value);

        parent::beforeSave();
    }
    
    public function removeHttp($url) {
        $disallowed = array('http://', 'https://');
        foreach($disallowed as $d) {
            if(strpos($url, $d) === 0) {
                return str_replace($d, '', $url);
            }
        }
        return $url;
    }
}
