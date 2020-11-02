<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Wirecard Central Eastern Europe GmbH
 * (abbreviated to Wirecard CEE) and are explicitly not part of the Wirecard CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Wirecard CEE does not guarantee their full
 * functionality neither does Wirecard CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Wirecard CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

/**
 * Test class for WirecardCEE_Client_QMore_Return_Success_Creditcard.
 * Generated by PHPUnit on 2011-06-24 at 13:36:02.
 */
use PHPUnit\Framework\TestCase;

class WirecardCEE_QMore_Return_Success_CreditcardTest extends TestCase
{

    /**
     * @var WirecardCEE_QMore_Return_Success_Creditcard
     */
    protected $object;
    protected $_returnData = Array(
        'amount'                   => '1',
        'currency'                 => 'EUR',
        'paymentType'              => 'CCARD',
        'financialInstitution'     => 'MC',
        'language'                 => 'de',
        'orderNumber'              => '16375141',
        'paymentState'             => 'SUCCESS',
        'authenticated'            => 'Yes',
        'anonymousPan'             => '0001',
        'expiry'                   => '10/2012',
        'cardholder'               => 'keiner',
        'maskedPan'                => '950000******0001',
        'gatewayReferenceNumber'   => 'DGW_16375141_RN',
        'gatewayContractNumber'    => 'DemoContractNumber123',
        'avsResponseCode'          => 'X',
        'avsResponseMessage'       => 'Demo AVS ResultMessage',
        'responseFingerprintOrder' => 'amount,currency,paymentType,financialInstitution,language,orderNumber,paymentState,authenticated,anonymousPan,expiry,cardholder,maskedPan,gatewayReferenceNumber,gatewayContractNumber,avsResponseCode,avsResponseMessage,secret,responseFingerprintOrder',
        'responseFingerprint'      => 'e077f1e8488f06a444899b43c94a0c814c69efea4870b4afc931cacc99ee1516db3f5909f7079d657d73fe0ef92c4cc48515cd4026168d228962ba7d05cc503f'
    );

    protected $_secret = 'B8AKTPWBRMNBV455FG6M2DANE99WU2';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new WirecardCEE_QMore_Return_Success_CreditCard($this->_returnData, $this->_secret);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {

    }

    public function testGetAnonymousPan()
    {
        $this->assertEquals('0001', $this->object->getAnonymousPan());
    }

    public function testGetAuthenticated()
    {
        $this->assertEquals('Yes', $this->object->getAuthenticated());
    }

    public function testGetExpiry()
    {
        $this->assertEquals('10/2012', $this->object->getExpiry());
    }

    public function testGetCardholder()
    {
        $this->assertEquals('keiner', $this->object->getCardholder());
    }

    public function testGetMaskedPan()
    {
        $this->assertEquals('950000******0001', $this->object->getMaskedPan());
    }

    public function testValidate()
    {
        $this->assertTrue($this->object->validate());
    }
}

?>
