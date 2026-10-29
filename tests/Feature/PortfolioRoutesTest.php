<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioRoutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test home page renders correctly.
     */
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('HAIDER');
        $response->assertSee('ALI');
        $response->assertSee('Laravel &amp; PHP Developer', false);
        $response->assertSee('Azora Solutions');
        $response->assertSee('AZ Halal Marts');
        $response->assertSee('North Fork Auto');
        $response->assertSee('Care Source Indy');
        $response->assertSee('Perfumes Collection');
        $response->assertSee('Mukoh Tires');
        $response->assertSee('Hari Om Bites');
    }

    /**
     * Test projects index page displays all 7 websites.
     */
    public function test_work_page_displays_all_six_projects(): void
    {
        $response = $this->get('/work');

        $response->assertStatus(200);
        $response->assertSee('Azora Solutions');
        $response->assertSee('AZ Halal Marts');
        $response->assertSee('North Fork Auto');
        $response->assertSee('Care Source Indy');
        $response->assertSee('Perfumes Collection');
        $response->assertSee('Mukoh Tires');
        $response->assertSee('Hari Om Bites');

        // Verify live links are present
        $response->assertSee('https://azorasolution.com/', false);
        $response->assertSee('https://www.azmarts.com/', false);
        $response->assertSee('https://northforkauto.com/', false);
        $response->assertSee('https://caresourceindy.com/', false);
        $response->assertSee('https://perfume-collection.wasmer.app/', false);
        $response->assertSee('https://mukoh-demowebsite.netlify.app/', false);
        $response->assertSee('https://hari-om-bites.wasmer.app/', false);
    }

    /**
     * Test all 7 project detail pages load with 200.
     */
    public function test_all_project_detail_pages_load_successfully(): void
    {
        $slugs = [
            'azora-solutions',
            'az-halal-marts',
            'north-fork-auto',
            'care-source-indy',
            'perfumes-collection',
            'mukoh-tires',
            'hari-om-bites',
        ];

        foreach ($slugs as $slug) {
            $response = $this->get('/work/'.$slug);
            $response->assertStatus(200);
            $response->assertSee('Strategic Project Context');
            $response->assertSee('The Architectural Hurdle');
            $response->assertSee('The Implemented Architecture');
            $response->assertSee('VISIT LIVE WEBSITE');
        }
    }

    /**
     * Test non-existent project returns 404.
     */
    public function test_non_existent_project_returns_404(): void
    {
        $response = $this->get('/work/unknown-project-xyz');
        $response->assertStatus(404);
    }

    /**
     * Test about page renders personal bio and skills.
     */
    public function test_about_page_loads_with_required_bio(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('Haider Ali');
        $response->assertSee('BEYOND THE');
        $response->assertSee('Laravel');
        $response->assertSee('PHP');
        $response->assertSee('MySQL');
        $response->assertSee('Blade Templating');
    }

    /**
     * Test contact page renders.
     */
    public function test_contact_page_loads(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Hadihnd0@gmail.com');
        $response->assertSee('Send a Direct Message');
        $response->assertSee('LET\'S MAKE', false);
    }

    /**
     * Test contact submission validates required fields.
     */
    public function test_contact_submission_requires_valid_data(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /**
     * Test contact submission succeeds and saves to database.
     */
    public function test_contact_submission_persists_to_database(): void
    {
        $payload = [
            'name' => 'Jane Client',
            'email' => 'jane@example.com',
            'subject' => 'New Laravel Web App',
            'project_type' => 'Laravel Web Application',
            'message' => 'Hello Haider, we would love to hire you to build our web application with Laravel and PHP.',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Jane Client',
            'email' => 'jane@example.com',
            'subject' => 'New Laravel Web App',
        ]);
    }
}
