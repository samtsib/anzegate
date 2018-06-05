<?php

namespace craft\commerce\migs\gateways;

use Craft;
use craft\commerce\base\RequestResponseInterface;
use craft\commerce\errors\PaymentException;
use craft\commerce\models\Transaction;
use Omnipay\Migs\ThreePartyGateway as Gateway;
use craft\commerce\omnipay\base\OffsiteGateway;
use craft\web\View;
use Omnipay\Common\AbstractGateway;
use Omnipay\Common\ItemBag;
use Omnipay\Omnipay;

/**
 * MIGS ThreeParty  represents the MIGS Rest gateway
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since     1.0
 */
class MigsThreeParty extends OffsiteGateway
{
    // Properties
    // =========================================================================

    /**
     * @var string
     */
    public $merchantId;

    /**
     * @var string
     */
    public $merchantAccessCode;

    /**
     * @var string
     */
    public $secureHash;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('commerce', 'MIGS');
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate('commerce-migs/threeparty/gatewaySettings', ['gateway' => $this]);
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createGateway(): AbstractGateway
    {
        /** @var Gateway $gateway */
        $gateway = Omnipay::create($this->getGatewayClassName());

        $gateway->setMerchantId($this->merchantId);
        $gateway->setMerchantAccessCode($this->merchantAccessCode);
        $gateway->setSecureHash($this->secureHash);

        return $gateway;
    }

    /**
     * @inheritdoc
     */
    protected function getGatewayClassName()
    {
        return '\\'.Gateway::class;
    }
}
