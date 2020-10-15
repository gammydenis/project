<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class nameTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function user_can_gun()
    {   
    $this->withoutExceptionHandling();
    $response = $this->post('/index',[
        'name' => 'insert gun name',
        'size' => '1',
        'type' => 'insert gun tyjpe',
        'price' => '1'
     ]);

     $gun = Gun::first();
     $response -> assertStatus(200);
     $This -> assertDatabaseHas ('index',[
        'name' => $gun->name,
        'size' => $gun->size,
        'type' => $gun->type,
        'price' => $gun->price,
     ]);

    }
    
}
