<?php

namespace Tests\Feature;

use Tests\TestCase;

class SistemaTest extends TestCase
{
    public function test_home()
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_login()
    {
        $this->get('/login')->assertStatus(200);
    }
}