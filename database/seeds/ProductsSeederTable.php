<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Quần Nam K54CK';
        $product->slug = Str::slug('Quần Nam K54CK');
        $product->desc = 'Quần Nam K54CK';
        $product->content = 'Quần Nam K54CK Dep 2019, Vai ben, thoang mat';
        $product->image = 'images/products/product3.jpg';
        $product->price = '56';
        $product->save();


        $product = new \App\Product();
        $product->name = 'Quần Nam K55CK';
        $product->slug = Str::slug('Quần Nam K55CK');
        $product->desc = 'Quần Nam K55CK';
        $product->content = 'Quần Nam K55CK Dep 2019, Vai ben, thoang mat';
        $product->image = 'images/products/product3.jpg';
        $product->price = '56';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Quần Nam K56CK';
        $product->slug = Str::slug('Quần Nam K56CK');
        $product->desc = 'Quần Nam K56CK';
        $product->content = 'Quần Nam K56CK Dep 2019, Vai ben, thoang mat';
        $product->image = 'images/products/product3.jpg';
        $product->price = '56';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Quần Nam K57CK';
        $product->slug = Str::slug('Quần Nam K57CK');
        $product->desc = 'Quần Nam K57CK';
        $product->content = 'Quần Nam K57CK Dep 2019, Vai ben, thoang mat';
        $product->image = 'images/products/product3.jpg';
        $product->price = '56';
        $product->save();
    }
}
