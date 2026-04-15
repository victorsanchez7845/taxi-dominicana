<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_punta_cana_route_exists()
    {
        $response = $this->get('/punta-cana-airport-transfers');
        $response->assertStatus(200);
        $response->assertSee('Punta Cana Airport Transfers');
    }

    public function test_bavaro_route_exists()
    {
        $response = $this->get('/punta-cana-to-bavaro-transfers');
        $response->assertStatus(200);
    }

    public function test_la_romana_route_exists()
    {
        $response = $this->get('/punta-cana-to-la-romana-transfers');
        $response->assertStatus(200);
    }

    public function test_cap_cana_route_exists()
    {
        $response = $this->get('/punta-cana-to-cap-cana-transfers');
        $response->assertStatus(200);
    }

    public function test_old_cancun_route_is_404()
    {
        $response = $this->get('/cancun-airport-transportation');
        $response->assertStatus(404);
    }
}
