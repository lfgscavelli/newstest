<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Customer;

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
        $customer = Customer::find(1);
        //$address->customer()->associate($customer)->save();
        dd($customer->address);
    }

}
