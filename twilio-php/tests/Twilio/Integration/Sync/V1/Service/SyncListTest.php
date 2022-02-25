<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Sync\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class SyncListTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                   ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://sync.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Lists/ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "created_by": "created_by",
                "date_expires": "2015-07-30T21:00:00Z",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "links": {
                    "items": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Items",
                    "permissions": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions"
                },
                "revision": "revision",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                   ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://sync.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Lists/ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                   ->syncLists->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://sync.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Lists'
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "created_by": "created_by",
                "date_expires": "2015-07-30T21:00:00Z",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "links": {
                    "items": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Items",
                    "permissions": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions"
                },
                "revision": "revision",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists->create();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                   ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://sync.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Lists/ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "created_by": "created_by",
                "date_expires": "2015-07-30T21:00:00Z",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "links": {
                    "items": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Items",
                    "permissions": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions"
                },
                "revision": "revision",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists("ESXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                   ->syncLists->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://sync.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Lists'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "lists": [],
                "meta": {
                    "first_page_url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists?PageSize=50&Page=0",
                    "key": "lists",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "lists": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "created_by": "created_by",
                        "date_expires": "2015-07-30T21:00:00Z",
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "links": {
                            "items": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Items",
                            "permissions": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions"
                        },
                        "revision": "revision",
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "unique_name": "unique_name",
                        "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/ESaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ],
                "meta": {
                    "first_page_url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists?PageSize=50&Page=0",
                    "key": "lists",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://sync.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->sync->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->syncLists->read();

        $this->assertGreaterThan(0, \count($actual));
    }
}