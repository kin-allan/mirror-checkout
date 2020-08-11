<?php

namespace Nimbus\MirrorCheckout\Plugin\Checkout;

class LayoutProcessor {

    /**
     * Reverse the street label
     * @param  \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param  array           $result
     * @return array
     */
    public function afterProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $subject, $result)
    {
        $result['components']['checkout']['children']
            ['steps']['children']['shipping-step']['children']['shippingAddress']
            ['children']['shipping-address-fieldset']['children']['street']['label'] = 'Teerts';

        return $result;
    }
}
