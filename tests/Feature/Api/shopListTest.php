<?php

namespace Tests\Feature\Api;

use App\Models\ShopList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class shopListTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryInJsonFile(){
        ShopList::factory(2)->create();

        $response = $this->get(route('apiHome'));
       
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryWithApi(){
       
        $products = ShopList::factory()->create();

        $response = $this->delete(route('apiDestroy', 1));

        $response = $this->get(route('apiHome'));
        $response->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateNewEntryWithJsonFile()
    {

        $data = [
            'product' => 'Cheese',
            'quantity' => 5,
        ];

        $response = $this->post(route('apiStore'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['product' => 'Cheese']);

        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryWithJsonFile()
    {
        $product = ShopList::factory()->create();

        $response = $this->get(route('apiHome'));
       
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['product' => $product->product]);  

        $response = $this->put(route('apiUpdate', $product->id), 
        [
            'product' => 'modified product',
            'quantity' => $product->quantity,
        ]);

        $data = ['product' => 'modified product'];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    } 

}
