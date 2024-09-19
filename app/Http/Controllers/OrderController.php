<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\OrderItem;
use App\Mail\PlaceOrderMail;
use App\Models\Admin\Toping;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\ProductTag;
use App\Mail\sendStatusChangeMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\sendPaymentStatusChangeMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        // DB::commit();
        // return;
        // return $request->all();
        // DB::beginTransaction();

        // return $request->all();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required|regex:/^[0-9]+$/',
            'address1' => ['required'],
            'city' => ['required'],
            'district' => ['required'],
        ]);
        if ($validator->fails()) {
            $errors = implode('<br>', $validator->errors()->all());
            $response = [
                'success' => false,
                'message' => $errors,
            ];
            return redirect()->back()->with(['error' => $errors]);
        }

        $authUser = null;
        if (Auth::check()) {
            $authUser = auth()->user();
        }else{
            $authUser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => 2,
                'is_guest' => '1',
                'is_verified' => false,
                'verification_code' => rand(100000, 999999),
            ]);
            $role = Role::where('name', 'Customer')->first();
            $authUser->assignRole($role);
        }

        if($authUser == null){
            return redirect()->back()->with(['error' => 'Invalid operation.']);
        }


        $latestOrder = Order::latest()->first();
        $lastOrderNumber = $latestOrder ? $latestOrder->order_number : 0;
        $lastOrderNumber = (int)$lastOrderNumber;
        $newOrderNumber = ++$lastOrderNumber;
        $newOrderNumber = str_pad($newOrderNumber, 6, '0', STR_PAD_LEFT);

        $paymentType = 1;

        $order = new Order;
        $order->order_number = $newOrderNumber;
        $order->customer_id = $authUser->id;
        $order->discount = 0;
            $order->delivery_charge = 0;
        $order->total_amount = getTotalcartValue();
        $order->paid_amount = getTotalcartValue();
        $order->payment_type = $paymentType;
        if ($paymentType == 1)
            $order->is_order_valid = 1;
        $order->address = $request->address1.' '.$request->address2;
        $order->city = $request->city;
        $order->district = $request->district;
        $order->post_code = $request->post_code;
        $order->save();

        foreach (cartItems() as $key => $item) {
            $orderItem = new OrderItem;
            $orderItem->order_id = $order->id;
            $orderItem->order_number = $order->order_number;
            $orderItem->product_id = $item['product']->id;
            $orderItem->quantity = $item['qty'];
            $orderItem->price = $item['product']->price;
            $orderItem->total_price = $item['qty'] * $item['product']->price;
            $orderItem->save();
        }

        clearCart();

        return redirect()->back()->with(['success' => 'Pleaced order Successfully']);
    }

    public function getOrders()
    {
        if (checkRole() == 'Delivery Boy') {
            $orders = Order::where('is_order_valid', 1)->where('delivery_boy', auth()->user()->id)->orderBy('id', 'DESC')->get();
        } else {
            $orders = Order::where('is_order_valid', 1)->orderBy('id', 'DESC')->get();
        }

        // $orders = Order::leftJoin('products', 'order_items.product_id', '=', 'products.id')
        //     ->select('orders.*')
        //     ->orderBy('orders.id', 'DESC')
        //     ->get();
        return view("admin.pages.order.index", compact('orders'));
    }
    public function getOrderDetails($id)
    {
        $orderDetails = Order::leftJoin('addresses', 'addresses.id', '=', 'orders.delivery_address_id')
            ->leftJoin('users', 'users.id', '=', 'orders.customer_id')
            ->select('orders.*', 'addresses.selectedAddress', 'addresses.selectedAddress', 'addresses.entrance', 'addresses.door_code', 'addresses.apartment', 'addresses.comment', 'addresses.floor', 'users.name', 'users.email', 'addresses.id as AddId')
            ->where('orders.order_number', $id)->where('orders.is_order_valid', 1)->first();
        $products = OrderItem::join('products', 'products.id', '=', 'order_items.product_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'order_items.size_id')
            ->select('order_items.*', 'products.name as proName', 'products.image', 'sizes.name as sizeName')
            ->where('order_items.order_number', $id)
            ->get();
        $order = Order::where('order_number', $id)->where('is_order_valid', 1)->first();

        // Loop through each product to fetch and bind topping names
        $products->each(function ($product) {
            $topingIds = explode(',', $product->toping_ids);

            // Fetch topping names based on the toping_ids
            $topingNames = Toping::whereIn('id', $topingIds)->pluck('name')->toArray();

            // Bind the topingNames to the product
            $product->topingNames = implode(', ', $topingNames);
        });

        $order = Order::where('order_number', $id)->where('is_order_valid', 1)->first();

        // $products->each(function ($product) {
        //     $topingIds = explode(',', $product->toping_ids);
        //     $topingNames = Toping::whereIn('id', $topingIds)->pluck('name')->toArray();
        //     $product->topingNames = implode(', ', $topingNames);
        // });

        $products->each(function ($product) {
            $topingIds = explode(',', $product->toping_ids);
            $topingNames = Toping::whereIn('id', $topingIds)->pluck('name')->toArray();
            $product->topingNames = implode(', ', $topingNames);

            $optionIds = explode(',', $product->option_ids);
            $optionNames = Toping::whereIn('id', $optionIds)->pluck('name')->toArray();
            $product->optionNames = implode(', ', $optionNames);

            $removedTags = explode(',', $product->removed_tags);
            $tagNames = ProductTag::whereIn('id', $removedTags)->pluck('tag_name')->toArray();
            $product->tagNames = implode(', ', $tagNames);
        });



        $deliveryBoys = User::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('roles.name', 'Delivery Boy')
            ->select('users.*', 'roles.name as roleName')
            ->orderBy('users.id', 'desc')
            ->get();
        //return view('layouts.placeOrderMail', compact('products', 'orderDetails', 'deliveryBoys','order'));
        // return $products;
        return view("admin.pages.order.details", compact('products', 'orderDetails', 'deliveryBoys', 'order'));
    }
    public function updateStatus(Request $request)
    {
        $data =  $request;
        $newStatus = $request->newStatus;
        $orderId = $request->orderId;
        $sendMail = $request->sendMail;
        $getOrder = Order::where('order_number', $orderId)->first();
        $getCustomerMail = User::where('id', $getOrder->customer_id)->first();

        if ($sendMail == true) {
            // return $getCustomerMail->email;
            //Mail::to($getCustomerMail->email)->send(new sendStatusChangeMail($orderId, $data));
        }
        $order = Order::where('order_number', $orderId)->where('is_order_valid', 1)->first();
        $order->order_status = $newStatus;
        $order->update();
        return response()->json('Success');
    }

    public function updatePaymentStatus(Request $request)
    {
        $data =  $request;
        $newStatus = $request->newStatus;
        $orderId = $request->orderId;
        $sendMail = $request->sendMail;
        $getOrder = Order::where('order_number', $orderId)->first();
        $getCustomerMail = User::where('id', $getOrder->customer_id)->first();

        if ($sendMail == true) {
            // return $getCustomerMail->email;
            //Mail::to($getCustomerMail->email)->send(new sendPaymentStatusChangeMail($orderId, $data));
        }
        $order = Order::where('order_number', $orderId)->where('is_order_valid', 1)->first();
        $order->is_paid = $newStatus;
        $order->update();
        return response()->json('Success');
    }

    public function updateAddress(Request $request)
    {
        $selectedAddress = $request->selectedAddress;
        $address = Address::where('id', $request->addressId)->first();
        $address->selectedAddress = $selectedAddress;
        $address->entrance = $request->entrance;
        $address->door_code = $request->door_code;
        $address->floor = $request->floor;
        $address->apartment = $request->apartment;
        $address->comment = $request->comment;
        $address->update();
        session()->flash('sweet_alert', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Address update success',
        ]);
        return redirect()->back();
    }

    public function updateQty(Request $request)
    {
        $orderItem = OrderItem::where('order_number', $request->order_id)->where('product_id', $request->product_id)->first();
        if ($orderItem) {

            $oldTotalProductPrice = $orderItem->total_price;
            $order = Order::where('order_number', $request->order_id)->first();
            $order->total_amount -= $oldTotalProductPrice;
            $order->paid_amount -= $oldTotalProductPrice;
            $order->update();

            $orderItem->quantity  = $request->qty;
            $orderItem->total_price = $orderItem->price * $request->qty;
            $orderItem->update();

            $newTotalProductPrice = $orderItem->total_price;
            $order->total_amount += $newTotalProductPrice;
            $order->paid_amount += $newTotalProductPrice;
            $order->update();

            $order->update();
            session()->flash('sweet_alert', [
                'type' => 'success',
                'title' => 'Success!',
                'text' => 'Quantity update success',
            ]);
            return redirect()->back();
        }
    }

    public function getCustomerProduct()
    {
        $userId = auth()->user()->id;
        return $orders = Order::where('customer_id', $userId)->where('is_order_valid',1)->orderBy('id', 'DESC')->get();
    }

    public function getOrderStatus()
    {
        return orderStatuses();
    }

    public function getCustomerOrderInfo(Request $request)
    {
        $request;
        $id =  $request->orderNumber;
        $orderDetails = Order::leftJoin('addresses', 'addresses.id', '=', 'orders.delivery_address_id')
            ->leftJoin('users', 'users.id', '=', 'orders.customer_id')
            ->select('orders.*', 'addresses.selectedAddress', 'addresses.selectedAddress', 'addresses.entrance', 'addresses.door_code', 'addresses.apartment', 'addresses.comment', 'addresses.floor', 'users.name', 'users.email', 'addresses.id as AddId')
            ->where('orders.order_number', $id)->where('orders.is_order_valid', 1)->first();
        $products = OrderItem::join('products', 'products.id', '=', 'order_items.product_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'order_items.size_id')
            ->select('order_items.*', 'products.name as proName', 'products.image', 'sizes.name as sizeName')
            ->where('order_items.order_number', $id)
            ->get();

        $products->each(function ($product) {
            $topingIds = explode(',', $product->toping_ids);
            $topingNames = Toping::whereIn('id', $topingIds)->pluck('name')->toArray();
            $product->topingNames = implode(', ', $topingNames);

            $optionIds = explode(',', $product->option_ids);
            $optionNames = Toping::whereIn('id', $optionIds)->pluck('name')->toArray();
            $product->optionNames = implode(', ', $optionNames);

            $removedTags = explode(',', $product->removed_tags);
            $tagNames = ProductTag::whereIn('id', $removedTags)->pluck('tag_name')->toArray();
            $product->tagNames = implode(', ', $tagNames);
        });

        $user = User::where('id', auth()->user()->id)->first();
        return response()->json(['message' => 'success', 'products' => $products, 'orderDetails' => $orderDetails, 'user' => $user]);
    }

    public function assignDeliveryBoy(Request $request)
    {
        $value = $request->value;
        $orderId = $request->orderId;
        $order = Order::where('order_number', $orderId)->first();
        $order->delivery_boy = $value;
        $order->update();
        return response()->json('Success');
    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
    
        if ($product) {
            $cart = Session::get('cart', []);
            $cart[$id]['product'] = $product;
            $cart[$id]['qty'] = ($cart[$id]['qty'] ?? 0) + 1;
    
            Session::put('cart', $cart);
        }
    
        return redirect()->back();
    }

    public function updateCartQty(Request $request){
        // return $request->all();
        $id = $request->id;
        $qty = $request->qty;
        $cart = Session::get('cart', []);
        if(isset($cart[$id])) $cart[$id]['qty'] = $qty;
        Session::put('cart', $cart);
        return getTotalcartValue();
    }

    function removeCartItem(Request $request){
        $id = $request->id;
        $cart = Session::get('cart', []);
        if(isset($cart[$id])) unset($cart[$id]);
        Session::put('cart', $cart);
        return getTotalcartValue();
    }
}
