<?php

it('renders a themed 404 page for unknown routes', function () {
    $response = $this->get('/this-route-does-not-exist');

    $response->assertNotFound();
    $response->assertSee('Page not found');
});
