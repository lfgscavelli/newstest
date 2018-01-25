<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Customer;
use App\Order;

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

        dd(Customer::find(1)->orders());
        //$order = Customer::find(1)->orders()->where('name', 'foo')->first();

        // Restituisce una collezione di oggetti orders di $customer
        //$customer->orders;

        // Restituisce l'oggetto Customer di $order
        //$order->customer;

        // http://prismjs.com/download.html
    }

}
