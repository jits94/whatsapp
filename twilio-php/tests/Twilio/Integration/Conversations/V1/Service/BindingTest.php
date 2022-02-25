<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Conversations\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class BindingTest extends HolodeckTestCase {
    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                            ->bindings("BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://conversations.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Bindings/BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                  ->bindings("BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                            ->bindings("BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://conversations.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Bindings/BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "chat_service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2016-10-21T11:37:03Z",
                "date_updated": "2016-10-21T11:37:03Z",
                "endpoint": "TestUser-endpoint",
                "identity": "TestUser",
                "binding_type": "gcm",
                "credential_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "message_types": [
                    "removed_from_conversation",
                    "new_message",
                    "added_to_conversation"
                ],
                "url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                  ->bindings("BSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                            ->bindings->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://conversations.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Bindings'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "bindings"
                },
                "bindings": [
                    {
                        "sid": "BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "chat_service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2016-10-21T11:37:03Z",
                        "date_updated": "2016-10-21T11:37:03Z",
                        "endpoint": "TestUser-endpoint",
                        "identity": "TestUser",
                        "binding_type": "gcm",
                        "credential_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "message_types": [
                            "removed_from_conversation",
                            "new_message",
                            "added_to_conversation"
                        ],
                        "url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                  ->bindings->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://conversations.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "bindings"
                },
                "bindings": []
            }
            '
        ));

        $actual = $this->twilio->conversations->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                  ->bindings->read();

        $this->assertNotNull($actual);
    }
}