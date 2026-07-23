<?php

it('renders seo meta tags on the homepage', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertSee('<meta name="description"', false);
    $response->assertSee('property="og:title"', false);
    $response->assertSee('name="twitter:card"', false);
    $response->assertSee('rel="canonical"', false);
});
