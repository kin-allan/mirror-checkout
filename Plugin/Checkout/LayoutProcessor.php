<?php

namespace Nimbus\MirrorCheckout\Plugin\Checkout;


class LayoutProcessor {

    public function aroundProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $subject, callable $process, $jsLayout)
    {
        $jsLayout = $process($jsLayout);

        $jsLayout['components']['checkout']['children']
            ['steps']['children']['shipping-step']['children']['shippingAddress']
            ['children']['shipping-address-fieldset']['children']['street']['label'] = 'Teerts';

        return $jsLayout;
    }
}
