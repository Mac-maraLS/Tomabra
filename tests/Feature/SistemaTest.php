<?php

namespace Tests\Feature;

use Tests\TestCase;

class SistemaTest extends TestCase
{
    public function test_home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login_page()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

}