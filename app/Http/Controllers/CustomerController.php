<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Product;

class CustomerController extends Controller
{

    public function save() {

        if (Customer::all()->count()<1) {
            $customer = new Customer;
            $customer->name = "Scavelli Company";
            $customer->save();
        } else {
            $customer = Customer::find(1);
        }
        $address = new Address();
        $address->name = "Via De Rosis, 331 - Vicenza";
        $customer->address()->save($address);
    }

    public function create() {
        //$customer = new Customer;
        //$customer->name = "Rossi Company";
        //$customer->save();

        $customer = Customer::find(2);
        $customer->orders()->create([
            'name' => "Ordine n. 34"
        ]);
        //$customer->address()->create([
        //    'name'=> "Via Roma, 3333 - Milano"

        //]);
    }

    public function dissociate() {
        $address = Address::findOrFail(2);
        $address->customer()->dissociate()->save();
    }

    public function product() {
        /*
        $product = new Product();
        $product->name = "Penne";
        $product->save();
        $product = new Product();
        $product->name = "Matite";
        $product->save();
        $product = new Product();
        $product->name = "Quaderni";
        $product->save();
         */
        $product = Product::findOrFail(2);
        $product->orders()->attach([2,3]);
    }

    public function associate() {
        /*$address = new Address();
        $address->name = "Via De Rosis, 888 - Pdetr";
        $address->save();*/
        $customer = Customer::findOrFail(1);

        //$address->customer()->associate($customer)->save();
        //$customer->address->name;
        //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

        //$order1 = new Order();
        //$order1->name = "Ordine n. 1";
        //$order2 = new Order();
        //$order2->name = "Ordine n. 2";

        //$customer->orders()->save($order); // salva singolo ordine
        //$customer->orders()->saveMany([$order1,$order2]); // salvataggio multiplo
        //$order->customer()->associate($customer)->save(); // salvataggio inverso

        /*
        $orderName = Customer::find(1)->orders->each(function ($item, $key) {
            return $item->name;
        });
        dd($orderName);*/

        dd($customer->address);

        //$order = Customer::find(1)->orders()->where('name', 'foo')->first();

        // Restituisce una collezione di oggetti orders di $customer
        //$customer->orders;

        // Restituisce l'oggetto Customer di $order
        //$order->customer;

        // http://prismjs.com/download.html
    }

}
