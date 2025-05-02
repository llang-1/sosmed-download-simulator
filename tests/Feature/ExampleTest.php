<?php

it('returns a successful response', function () {
    $response = $this->get('/api/download-api');

    $response->assertStatus(200);
});
