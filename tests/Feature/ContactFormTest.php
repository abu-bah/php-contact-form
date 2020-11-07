<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Contact;

class ContactFormTest extends TestCase
{
    /**
     * Contact form test.
     *
     * @return void
     */
    public function testStoreContactForm()
    {
        $data = [
            'name' => 'Abu Bah',
            'email' => 'bbah95@gmail.com',
            'phone' => '8626860105',
            'message' => 'test message'
        ];

        Contact::create($data);

        $storedContact = Contact::where('name', '=', 'Abu Bah')->orderBy('created_at', 'desc')->first();

        $storedData = [
            'name' => $storedContact->name,
            'email' => $storedContact->email,
            'phone' => $storedContact->phone,
            'message' => $storedContact->message
        ];

        $this->assertSame($data, $storedData);
    }
}
