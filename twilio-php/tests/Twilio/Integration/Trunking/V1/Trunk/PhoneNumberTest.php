<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Trunking\V1\Trunk;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class PhoneNumberTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trunking.twilio.com/v1/Trunks/TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers/PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2010-12-10T17:27:34Z",
                "date_updated": "2015-10-09T11:36:32Z",
                "friendly_name": "(415) 867-5309",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "phone_number": "+14158675309",
                "api_version": "2010-04-01",
                "voice_caller_id_lookup": null,
                "voice_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Call",
                "voice_method": "POST",
                "voice_fallback_url": null,
                "voice_fallback_method": null,
                "status_callback": "",
                "status_callback_method": "POST",
                "voice_application_sid": "",
                "trunk_sid": "TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sms_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Message",
                "sms_method": "POST",
                "sms_fallback_url": "",
                "sms_fallback_method": "POST",
                "sms_application_sid": "APaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "address_requirements": "none",
                "beta": false,
                "url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "capabilities": {
                    "voice": true,
                    "sms": true,
                    "mms": true
                },
                "links": {
                    "phone_number": "https://api.twilio.com/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IncomingPhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
                }
            }
            '
        ));

        $actual = $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://trunking.twilio.com/v1/Trunks/TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers/PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->phoneNumbers->create("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['PhoneNumberSid' => "PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", ];

        $this->assertRequest(new Request(
            'post',
            'https://trunking.twilio.com/v1/Trunks/TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2010-12-10T17:27:34Z",
                "date_updated": "2015-10-09T11:36:32Z",
                "friendly_name": "(415) 867-5309",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "phone_number": "+14158675309",
                "api_version": "2010-04-01",
                "voice_caller_id_lookup": null,
                "voice_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Call",
                "voice_method": "POST",
                "voice_fallback_url": null,
                "voice_fallback_method": null,
                "status_callback": "",
                "status_callback_method": "POST",
                "voice_application_sid": "",
                "trunk_sid": "TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sms_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Message",
                "sms_method": "POST",
                "sms_fallback_url": "",
                "sms_fallback_method": "POST",
                "sms_application_sid": "APaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "address_requirements": "none",
                "beta": false,
                "url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "capabilities": {
                    "voice": true,
                    "sms": true,
                    "mms": true
                },
                "links": {
                    "phone_number": "https://api.twilio.com/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IncomingPhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
                }
            }
            '
        ));

        $actual = $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->phoneNumbers->create("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->phoneNumbers->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trunking.twilio.com/v1/Trunks/TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=1&Page=0",
                    "key": "phone_numbers",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 1,
                    "previous_page_url": null,
                    "url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=1&Page=0"
                },
                "phone_numbers": [
                    {
                        "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2010-12-10T17:27:34Z",
                        "date_updated": "2015-10-09T11:36:32Z",
                        "friendly_name": "(415) 867-5309",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "phone_number": "+14158675309",
                        "api_version": "2010-04-01",
                        "voice_caller_id_lookup": null,
                        "voice_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Call",
                        "voice_method": "POST",
                        "voice_fallback_url": null,
                        "voice_fallback_method": null,
                        "status_callback": "",
                        "status_callback_method": "POST",
                        "voice_application_sid": "",
                        "trunk_sid": "TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sms_url": "https://webhooks.twilio.com/v1/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Proxy/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks/Message",
                        "sms_method": "POST",
                        "sms_fallback_url": "",
                        "sms_fallback_method": "POST",
                        "sms_application_sid": "APaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "address_requirements": "none",
                        "beta": false,
                        "url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "capabilities": {
                            "voice": true,
                            "sms": true,
                            "mms": true
                        },
                        "links": {
                            "phone_number": "https://api.twilio.com/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IncomingPhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
                        }
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->phoneNumbers->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=1&Page=0",
                    "key": "phone_numbers",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 1,
                    "previous_page_url": null,
                    "url": "https://trunking.twilio.com/v1/Trunks/TKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=1&Page=0"
                },
                "phone_numbers": []
            }
            '
        ));

        $actual = $this->twilio->trunking->v1->trunks("TKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->phoneNumbers->read();

        $this->assertNotNull($actual);
    }
}