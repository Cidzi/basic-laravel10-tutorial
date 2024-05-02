<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function customers() {
        //$customers = Customer::orderByDesc('id')->get();
        $customers = Customer::paginate(10);
        return view('customers',compact('customers'));
    }
    function customer($id) {
        $customer = Customer::find($id);
        return view('customer',compact('customer'));
    }
}
