<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MarketingPageTest extends TestCase
{
    /** @test */
    public function it_loads_marketing_page_and_shows_product_name()
    {
        $this->visit('/')
             ->see('screeenly')
             ->see('Screenshot as a Service');
    }

    /** @test */
    public function it_shows_github_signup_button()
    {
        $this->visit('/')
            ->see('Sign up with Github');
    }

    /** @test */
    public function it_shows_bugsnag_as_sponsor()
    {
        $this->visit('/')
            ->see('Bugsnag');
    }
}
