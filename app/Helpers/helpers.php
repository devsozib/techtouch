<?php

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Currency;
use App\Models\Admin\SubCategory;
use App\Models\Admin\ProductImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\ProductOptionTopping;

function getProductImage($id)
{
  return ProductImage::where('product_id', $id)->get();
}
function getStatus()
{
  return [
    0 => 'Inactive',
    1 => 'Active',
  ];
}

function getAmountType()
{
  return [
    1 => 'Percentage',
    0 => 'Direct',
  ];
}

function getUser($id)
{
  return User::where('id', $id)->pluck('name')->first();
}

function orderStatuses()
{
  return [
    '1' => 'Pending',
    '2' => 'Processing',
    '3' => 'Shipped',
    '4' => 'Out for Delivery',
    '5' => 'Delivered',
    '6' => 'Canceled',
    '7' => 'Refunded',
    '8' => 'On Hold',
    '9' => 'Backordered',
    '10' => 'Returned'
  ];
}


function currecySymbleType()
{
  return [
    '1' => 'Prefix',
    '2' => 'Suffix',
  ];
}
function getCurrency()
{
  return Currency::where('status', '1')->pluck('symbol')->first();
}


function shceduleTypes()
{
  return [
    'Delivery' => 'Delivery',
    'Dining room and pick-up' => 'Dining room and pick-up',
  ];
}

function userTypes()
{
  return [
    '1' => 'Super Admin',
    '2' => 'Customer',
    '3' => 'Delivery Boy',
  ];
}

function getNotifications()
{
  $notifications = Notification::where('status', '1')->orderBy('created_at', 'DESC')->get();
  return $notifications;
}
function unSeenNotifications()
{
  $notifications = Notification::where('status', '1')->where('isSeen', '0')->get();
  return count($notifications);
}

function displayNotificationTime($timestamp)
{
  $time_ago = strtotime($timestamp);
  $current_time = time();
  $time_difference = $current_time - $time_ago;
  $minutes = round($time_difference / 60);
  $hours = round($time_difference / 3600);
  $seconds = round($time_difference);

  if ($seconds < 60) {
    if ($seconds <= 1) {
      return "1 second ago";
    } else {
      return "$seconds seconds ago";
    }
  } elseif ($minutes < 60) {
    if ($minutes <= 1) {
      return "1 minute ago";
    } else {
      return "$minutes minutes ago";
    }
  } elseif ($hours < 24) {
    if ($hours <= 1) {
      return "1 hour ago";
    } else {
      return "$hours hours ago";
    }
  } else {
    return date("d M \a\\t H:i", $time_ago);
  }
}

function sendEmployeeCredential($data)
{
  $data['email'] = "shawonmahmodul12@gmail.com";

  $companyName = 'Company Name';
  $companyEmail = 'shawonmahmodul12@gmail.com';

  Mail::send('emails.employee',  ['data' => $data], function ($m) use ($data, $companyEmail, $companyName) {
    $m->from($companyEmail, 'Credentials of ' . $companyName);
    $m->to($data['email'])->subject('HRIS Access Information');
  });
}

function getSelectedTopings($id)
{
  return ProductOptionTopping::join('topings', 'topings.id', '=', 'product_option_toppings.topping_id')->select('topings.*')->where('product_option_toppings.product_option_id', $id)->get();
}

function getHost()
{
  $host = request()->getHost();
  $host = str_replace('www.', '', $host);
  return $host;
}

function getRootURL()
{
  $currentUrl = request()->url();
  $parsed_url = parse_url($currentUrl);
  $host = $parsed_url['host'];
  $port = isset($parsed_url['port']) ? $parsed_url['port'] : null;

  $result = $host;
  if ($port !== null) {
    $result = $host . ':' . $port;
  }
  return $result;
}


function checkRole()
{
  $user = Auth::user();
  return $user->getRoleNames()['0'];
}

function return_library($object, $key_col, $value_col)
{
    $data = array();
    foreach ($object as $item)
        $data[$item->$key_col] = $item->$value_col;
    return $data;
}

function lib_category()
{
    return return_library(Category::where('status', '1')->get(), 'id', 'name');
}

function getArrayData($datas, $key)
{
    $result = isset($datas[$key]) ? $datas[$key] : '';
    return $result;
}

function _print($data, $exit = 0)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if (!$exit) exit;
}

function cartCount(){
  $cart = Session::get('cart', []);
  return count($cart);
}
function cartItems(){
  return Session::get('cart', []);
}

function clearCart(){
  return Session::put('cart', []);
}

function getTotalcartValue(){
  $cart = Session::get('cart', []);
  $total = 0;
  foreach ($cart as $item){
    $total += ($item['qty'] * $item['product']->price);
  }
  return $total;
}



function getElevatorCat() {
  // Get the "Elevator" category with its subcategories using the query builder
  $elevator = DB::table('categories')
      ->where('name', 'Elevator')
      ->first();

  if ($elevator) {
      // Fetch subcategories based on the parent ID
      $subcategories = DB::table('sub_categories')
          ->where('category_id', $elevator->id)
          ->where('status', '1')
          ->orderBy('id', 'asc')
          ->get();

      // Return the main category and its subcategories
      return [
          'category' => $elevator,
          'subcategories' => $subcategories
      ];
  }

  return null; // Return null if the category is not found
}