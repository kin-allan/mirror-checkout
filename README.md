<p align="center">
    <h1 align="center">Mirror Checkout</h1>
    <br>
</p>

<h3>Instructions</h3>

<ul>
    <li>1. Go to the Magento root directory</li>
    <li>1. Run the command: <code>composer config repositories.kin-allan-mirror-checkout git https://github.com/kin-allan/mirror-checkout</code></li>
    <li>2. Then: <code>composer require kin-allan/mirror-checkout:1.0.1</code></li>
    <li>3. After the composer process is finished, run those commands:</li>
    <li><code>php bin/magento module Nimbus_MirrorCheckout</code></li>
    <li><code>php bin/magento setup:upgrade</code></li>
    <li><code>php bin/magento setup:di:compile</code></li>
    <li><code>php bin/magento cache:flush</code></li>
</ul>

<h3>What it does</h3>
<p>It changes the checkout page, doing: </p>
<ul>
    <li>Remove the Company field of the Shipping Form</li>
    <li>Remove the Phone Number field of the Shipping Form</li>
    <li>Revert labels of the Shipping Form</li>
    <li>Change the Next action on the Shipping Address set to redirect back to the cart</li>
</ul>
<strong>Note:</strong> In order to see it, please add a phyisical (simple) product on the cart as shipping process is not required for virtual products.
