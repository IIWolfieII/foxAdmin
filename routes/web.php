<?php

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view(
  'index',
  [
    'customers' => Customer::latest()->with('orders')->get(),
    'orders' => Order::latest()->get(),
    'currentRoute' => '/dashboard'
  ]
))->name('dashboard');

Route::get('/customers', fn () => view(
  'customers',
  [
    'customers' => Customer::with('orders')->get(),
    'currentRoute' => '/customers'
  ]
))->name('customers');

Route::get('/orders', fn () => view(
  'orders',
  [
    'orders' => Order::with('customer')->get(),
    'currentRoute' => '/orders'
  ]
))->name('orders');
