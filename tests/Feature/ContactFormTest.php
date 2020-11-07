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
            'phone' => '8626860105'
        ];

        Contact::create($data);

        $storedContact = Contact::where('name', '=', 'Abu Bah')->first();

        $storedData = [
            'name' => $storedContact->name,
            'email' => $storedContact->email,
            'phone' => $storedContact->phone
        ];

        $this->assertSame($data, $storedData);
    }
}
