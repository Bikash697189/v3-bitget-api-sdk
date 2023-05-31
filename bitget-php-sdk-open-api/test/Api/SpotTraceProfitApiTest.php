<?php
/**
 * SpotTraceProfitApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Bitget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bitget Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Bitget\Test\Api;

use \Bitget\Configuration;
use \Bitget\ApiException;
use \Bitget\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * SpotTraceProfitApiTest Class Doc Comment
 *
 * @category Class
 * @package  Bitget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpotTraceProfitApiTest extends TestCase
{
    private $config;

    private $apiInstance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->config = \Bitget\Config::getDefaultConfig();
        $this->apiInstance = new \Bitget\Api\SpotTraceProfitApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new \GuzzleHttp\Client(),
            $this->config
        );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for spotTraceProfitHisDetailList
     *
     * profitHisDetailList.
     *
     */
    public function testSpotTraceProfitHisDetailList()
    {
        try {
            $req = new \Bitget\Model\TotalProfitHisDetailListRequest(); //
            $req->setCoinName("USDT");
            $req->setDate("1681985100000");
            $result = $this->apiInstance->spotTraceProfitHisDetailList($req);
            print_r($result);

            $this->assertNotNull($result);
            $this->assertEquals($result->getCode(), "00000");
            $this->assertEquals($result->getMsg(), "success");
            $this->assertNotNull($result->getData());
            $this->assertNotNull($result->getData()->getResultList());
            foreach ($result->getData()->getResultList() as $item) {
                print_r($item);
                $this->assertNotNull($item);
                $this->assertNotNull($item->getProfit());
                $this->assertNotNull($item->getCoinName());
                $this->assertNotNull($item->getDistributeRatio());
                $this->assertNotNull($item->getNickName());
            }
        } catch (Exception $e) {
            echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for spotTraceProfitHisList
     *
     * profitHisList.
     *
     */
    public function testSpotTraceProfitHisList()
    {
        try {
            $req = new \Bitget\Model\TotalProfitListRequest(); //
            $result = $this->apiInstance->spotTraceTotalProfitList($req);
            print_r($result);

            $this->assertNotNull($result);
            $this->assertEquals($result->getCode(), "00000");
            $this->assertEquals($result->getMsg(), "success");
            $this->assertNotNull($result->getData());
            foreach ($result->getData() as $item) {
                print_r($item);
                $this->assertNotNull($item);
                $this->assertNotNull($item->getProfit());
                $this->assertNotNull($item->getProductCode());
            }
        } catch (Exception $e) {
            echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for spotTraceTotalProfitInfo
     *
     * totalProfitInfo.
     *
     */
    public function testSpotTraceTotalProfitInfo()
    {
        try {
            $result = $this->apiInstance->spotTraceTotalProfitInfo();
            print_r($result);

            $this->assertNotNull($result);
            $this->assertEquals($result->getCode(), "00000");
            $this->assertEquals($result->getMsg(), "success");
            $this->assertNotNull($result->getData());
            $this->assertNotNull($result->getData()->getYesterdaySplitProfit());
        } catch (Exception $e) {
            echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for spotTraceTotalProfitList
     *
     * totalProfitList.
     *
     */
    public function testSpotTraceTotalProfitList()
    {
        try {
            $req = new \Bitget\Model\TotalProfitListRequest(); //
            $result = $this->apiInstance->spotTraceTotalProfitList($req);
            print_r($result);

            $this->assertNotNull($result);
            $this->assertEquals($result->getCode(), "00000");
            $this->assertEquals($result->getMsg(), "success");
            $this->assertNotNull($result->getData());
            $this->assertNotNull($result->getData());
            foreach ($result->getData() as $item) {
                print_r($item);
                $this->assertNotNull($item);
                $this->assertNotNull($item->getProductCode());
                $this->assertNotNull($item->getProfit());
            }
        } catch (Exception $e) {
            echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for spotTraceWaitProfitDetailList
     *
     * waitProfitDetailList.
     *
     */
    public function testSpotTraceWaitProfitDetailList()
    {
        try {
            $req = new \Bitget\Model\WaitProfitDetailListRequest(); //
            $result = $this->apiInstance->spotTraceWaitProfitDetailList($req);
            print_r($result);

            $this->assertNotNull($result);
            $this->assertEquals($result->getCode(), "00000");
            $this->assertEquals($result->getMsg(), "success");
            $this->assertNotNull($result->getData());
            $this->assertNotNull($result->getData()->getResultList());
            foreach ($result->getData()->getResultList() as $item) {
                print_r($item);
                $this->assertNotNull($item);
                $this->assertNotNull($item->getProfit());
                $this->assertNotNull($item->getDistributeRatio());
                $this->assertNotNull($item->getCoinName());
            }
        } catch (Exception $e) {
            echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
        }
    }
}
