<?php

namespace Oro\Bundle\FedexShippingBundle\Tests\Unit\Client\RateService\Response\Factory;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\FedexShippingBundle\Client\RateService\Response\Factory\FedexRateServiceResponseFactory;
use Oro\Bundle\FedexShippingBundle\Client\RateService\Response\FedexRateServiceResponse;
use PHPUnit\Framework\TestCase;

class FedexRateServiceResponseFactoryTest extends TestCase
{
    public function testCreateConnectionError()
    {
        static::assertEquals(
            $this->createErrorResponse(),
            (new FedexRateServiceResponseFactory())->create(null)
        );
    }

    public function testCreateErrorWithMultipleNotifications()
    {
        $notification1 = $this->createNotification(23);
        $notification2 = $this->createNotification(34);


        $soapResponse = new \StdClass();
        $soapResponse->HighestSeverity = FedexRateServiceResponse::SEVERITY_ERROR;
        $soapResponse->Notifications = [$notification1, $notification2];

        static::assertEquals(
            new FedexRateServiceResponse(FedexRateServiceResponse::SEVERITY_ERROR, 23),
            (new FedexRateServiceResponseFactory())->create($soapResponse)
        );
    }

    public function testCreateFailureWithOneNotification()
    {
        $notification = $this->createNotification(1);

        $soapResponse = new \StdClass();
        $soapResponse->HighestSeverity = FedexRateServiceResponse::SEVERITY_FAILURE;
        $soapResponse->Notifications = $notification;

        static::assertEquals(
            new FedexRateServiceResponse(FedexRateServiceResponse::SEVERITY_FAILURE, 1),
            (new FedexRateServiceResponseFactory())->create($soapResponse)
        );
    }

    public function testCreateWarningWithNoRateDetails()
    {
        $notification = $this->createNotification(1);

        $soapResponse = new \StdClass();
        $soapResponse->HighestSeverity = FedexRateServiceResponse::SEVERITY_WARNING;
        $soapResponse->Notifications = $notification;

        static::assertEquals(
            new FedexRateServiceResponse(FedexRateServiceResponse::SEVERITY_WARNING, 1),
            (new FedexRateServiceResponseFactory())->create($soapResponse)
        );
    }

    public function testCreateWarningOneRateReply()
    {
        $price = 100.04;
        $currency = 'USD';
        $service = 'service1';
        $notificationCode = 42;

        $rateReplyDetails = new \StdClass();
        $rateReplyDetails->ServiceType = $service;
        $rateReplyDetails->RatedShipmentDetails = new \StdClass();
        $rateReplyDetails->RatedShipmentDetails->ShipmentRateDetail = new \StdClass();
        $rateReplyDetails->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge = new \StdClass();
        $rateReplyDetails->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount = $price;
        $rateReplyDetails->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Currency = $currency;

        $soapResponse = new \StdClass();
        $soapResponse->HighestSeverity = FedexRateServiceResponse::SEVERITY_WARNING;
        $soapResponse->Notifications = $this->createNotification($notificationCode);
        $soapResponse->RateReplyDetails = $rateReplyDetails;

        static::assertEquals(
            new FedexRateServiceResponse(
                FedexRateServiceResponse::SEVERITY_WARNING,
                $notificationCode,
                [$service => Price::create($price, $currency)]
            ),
            (new FedexRateServiceResponseFactory())->create($soapResponse)
        );
    }

    public function testCreateSuccessMultipleRateReplies()
    {
        $services = ['service1', 'service2'];
        $prices = [
            Price::create(54.6, 'EUR'),
            Price::create(46.03, 'USD'),
        ];
        $notificationCode = 65;

        $soapResponse = new \StdClass();
        $soapResponse->HighestSeverity = FedexRateServiceResponse::SEVERITY_SUCCESS;
        $soapResponse->Notifications = $this->createNotification($notificationCode);
        $soapResponse->RateReplyDetails = [
            $this->createRateReplyDetail($services[0], $prices[0]),
            $this->createRateReplyDetail($services[1], $prices[1]),
        ];

        static::assertEquals(
            new FedexRateServiceResponse(
                FedexRateServiceResponse::SEVERITY_SUCCESS,
                $notificationCode,
                [
                    $services[0] => $prices[0],
                    $services[1] => $prices[1],
                ]
            ),
            (new FedexRateServiceResponseFactory())->create($soapResponse)
        );
    }

    /**
     * @param string $serviceName
     * @param Price  $price
     *
     * @return \StdClass
     */
    private function createRateReplyDetail(string $serviceName, Price $price): \StdClass
    {
        $rateReplyDetails = new \StdClass();
        $rateReplyDetails->ServiceType = $serviceName;
        $rateReplyDetails->RatedShipmentDetails = [new \StdClass()];
        $rateReplyDetails->RatedShipmentDetails[0]->ShipmentRateDetail = new \StdClass();
        $rateReplyDetails->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge = new \StdClass();
        $rateReplyDetails->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount = $price->getValue();
        $rateReplyDetails->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Currency =
            $price->getCurrency();

        return $rateReplyDetails;
    }

    /**
     * @param int $code
     *
     * @return \StdClass
     */
    private function createNotification(int $code): \StdClass
    {
        $notification = new \StdClass();
        $notification->Code = $code;

        return $notification;
    }

    /**
     * @return FedexRateServiceResponse
     */
    private function createErrorResponse(): FedexRateServiceResponse
    {
        return new FedexRateServiceResponse(
            FedexRateServiceResponse::SEVERITY_ERROR,
            FedexRateServiceResponse::CONNECTION_ERROR
        );
    }
}
