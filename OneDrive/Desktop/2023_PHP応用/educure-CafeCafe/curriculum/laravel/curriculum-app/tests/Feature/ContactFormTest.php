<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Contact;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function contact_form_displays_correctly()
    {
        $response = $this->get(route('contact.index'));

        $response->assertStatus(200);
        $response->assertSee('お問い合わせ');
    }

    /** @test */
    public function contact_form_submits_correctly()
    {
        $formData = [
            'name' => 'Test User',
            'kana' => 'テストユーザー',
            'tel' => '09012345678',
            'email' => 'test@example.com',
            'body' => 'This is a test message.',
        ];

        $this->post(route('contact.store'), $formData);

        $this->assertDatabaseMissing('contacts', $formData);

        $this->post(route('contact.send'))
            ->assertRedirect(route('contact.complete'));

        $this->assertDatabaseHas('contacts', $formData);
    }
}