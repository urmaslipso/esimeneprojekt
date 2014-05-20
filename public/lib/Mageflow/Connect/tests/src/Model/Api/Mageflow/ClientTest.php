<?php
/**
 * MageFlow
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@mageflow.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * If you wish to use the MageFlow Connect extension as part of a paid
 * service please contact licence@mageflow.com for information about
 * obtaining an appropriate licence.
 */

/**
 * ClientTest.php
 *
 * PHP version 5
 *
 * @category   MFX
 * @package    Mageflow_Connect
 * @subpackage Lib
 * @author     MageFlow OÜ, Estonia <info@mageflow.com>
 * @copyright  Copyright (C) 2014 MageFlow OÜ, Estonia (http://mageflow.com) 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link       http://mageflow.com/
 */

namespace Mageflow\Connect\Model\Api\Mageflow;

/**
 * ClientTest
 *
 * @category   MFX
 * @package    Mageflow_Connect
 * @subpackage Lib
 * @author     MageFlow OÜ, Estonia <info@mageflow.com>
 * @copyright  Copyright (C) 2014 MageFlow OÜ, Estonia (http://mageflow.com) 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link       http://mageflow.com/
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     * client
     *
     * @var Client
     */
    protected $client;

    /**
     * set up
     */
    public function setUp()
    {
        $helper = \Mage::helper('mageflow_connect/oauth');
        $this->client = $helper->getApiClient();
        parent::setUp();
    }

    /**
     * tear down
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * test instance
     */
    public function testInstance()
    {
        $this->assertInstanceOf(
            '\Mageflow\Connect\Model\Api\Mageflow\Client', $this->client
        );
    }

    /**
     * test new get
     */
    public function testNewGet()
    {
        $out = $this->client->get('/find/Instance/instance_key/flwin');
        print_r($out);
        echo PHP_EOL;
    }

    /**
     * test new post
     */
    public function testNewPost()
    {
        $out = $this->client->post('/changeset', ['description' => 'blaah']);
        print_r($out);
        echo PHP_EOL;
    }

    /**
     * test new put
     */
    public function testNewPut()
    {
        $out = $this->client->put(
            '/changeset', ['description' => 'blaah', 'id' => 1]
        );
        print_r($out);
        echo PHP_EOL;
    }
}
