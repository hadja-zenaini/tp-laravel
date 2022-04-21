<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\TravelService;
use function PHPUnit\Framework\assertEquals;

class TravelServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_that_search_work()
    {
        $travelService = new TravelService();

        $travels = $travelService->search("Tours", "Paris");

        $this->assertTrue(count($travels) > 0);

        foreach ($travels as $travel){
            $this->assertEquals("Tours", $travel->departure);
            $this->assertEquals("Paris", $travel->destination);
        }
    }
}
