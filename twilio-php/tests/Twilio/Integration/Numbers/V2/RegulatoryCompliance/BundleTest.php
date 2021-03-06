<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class BundleTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->bundles->create("friendly_name", "email");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['FriendlyName' => "friendly_name", 'Email' => "email", ];

        $this->assertRequest(new Request(
            'post',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "regulation_sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "status": "draft",
                "email": "email",
                "status_callback": "http://www.example.com",
                "valid_until": null,
                "date_created": "2019-07-30T22:29:24Z",
                "date_updated": "2019-07-31T01:09:00Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "evaluations": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Evaluations",
                    "item_assignments": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/ItemAssignments",
                    "bundle_copies": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Copies"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles->create("friendly_name", "email");

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->bundles->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [
                    {
                        "sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "regulation_sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "friendly_name",
                        "status": "provisionally-approved",
                        "email": "email",
                        "status_callback": "http://www.example.com",
                        "valid_until": "2020-07-31T01:00:00Z",
                        "date_created": "2019-07-30T22:29:24Z",
                        "date_updated": "2019-07-31T01:09:00Z",
                        "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "links": {
                            "evaluations": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Evaluations",
                            "item_assignments": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/ItemAssignments",
                            "bundle_copies": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Copies"
                        }
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles?Status=draft&RegulationSid=RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&IsoCountry=US&FriendlyName=friendly_name&NumberType=mobile&PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles?Status=draft&RegulationSid=RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&IsoCountry=US&FriendlyName=friendly_name&NumberType=mobile&PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "regulation_sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "status": "draft",
                "valid_until": null,
                "email": "email",
                "status_callback": "http://www.example.com",
                "date_created": "2019-07-30T22:29:24Z",
                "date_updated": "2019-07-31T01:09:00Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "evaluations": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Evaluations",
                    "item_assignments": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/ItemAssignments",
                    "bundle_copies": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Copies"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "regulation_sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "status": "draft",
                "email": "email",
                "status_callback": "http://www.example.com",
                "valid_until": null,
                "date_created": "2019-07-30T22:29:24Z",
                "date_updated": "2019-07-31T01:09:00Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "evaluations": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Evaluations",
                    "item_assignments": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/ItemAssignments",
                    "bundle_copies": "https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Copies"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Bundles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->bundles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}