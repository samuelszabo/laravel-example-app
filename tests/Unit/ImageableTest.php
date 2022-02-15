<?php

use PHPUnit\Framework\TestCase;

class ImageableTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Product_is_imageable()
    {
        $product = \Database\Factories\ProductFactory::new()->make();

        $d = \Illuminate\Support\Facades\DB::table('avc')->select(['abc']);

//        die(env('APP_NAME'));//vypisuje nic
        $this->assertNotNull($product->image());
    }
}
