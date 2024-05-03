<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Product;
use App\Models\OrderSale;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class SaleController extends Controller
{


    function sale(){
        $customer = Customer::get();
        $product = Product::get();
        return view('formsale',compact('customer','product'));
        //dd($customer);
    }

    function saleorder($id) {
        $customer = Customer::find($id);
        return view('customer',compact('customer'));
    }

    function insertorder(Request $request){
        $request->validate(
            [
                'customer'=>'required',
                'product'=>'required'
            ],
            [
                'customer.required'=>'กรุณาเลือกลูกค้า',
                'product.required'=>'กรุณาเลือกสินค้า'
            ]
        );#ส่งค่า validate error ออกไปเป็น $message

        //$cus_id=[
        //'customer_id'=>$request->customer
        //];
        //OrderSale::insert($cus_id)([
        $create = OrderSale::insert([
            'customer_id'=>$request->customer
        ]);

        $orderid = $create->id;


        //$orderid = OrderSale::latest('id')->first();
        //$orderid = OrderSale::orderBy('id', 'DESC')->first();

        $productlist=[
            'order_id'=>$orderid,
            'product_id'=>$request->product
        ];

        //Orderdetail::insert($productlist);

        //return redirect('/author/blog');
        dd($orderid);
    }

}
