<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServicesListTest extends TestCase
{
    use RefreshDatabase;
    public function test_service_list_should_be_accessable(){
        $user = User::factory()->create();
        $customer = Customer::factory()->create();
        $service = Service::factory()->create([
            'customer_id' => $customer->account_number,
            'type_of_service' => 'new_connection',
            'contact_number' => $customer->contact_number,
            'status' => 'water_works'
        ]);

        $response = $this->actingAs($user)->get(route('admin.services-list.index'));

        $response->assertViewIs('pages.services-list');
        $response->assertViewHas('services');
    }


}
