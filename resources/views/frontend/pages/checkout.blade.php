@extends('frontend.layouts.app')
@section('content')
 <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">Checkout</h1>
                        <div class="meta">
                            <a href="#" class="prev">Home /</a>
                            <a href="#" class="next">Checkout</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->

    <main class="ms-main">
        <div class="ms-page-content">

            <!--================= Checkout Area Start =================-->
            <article id="post-284" class="page checkout-area type-page status-publish hentry">
                <header class="ms-sp--header container">
                    <h1 class="ms-sp--title">Checkout</h1>
                </header>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" id="validation-error-alert">
                        <ul>
                            <li>{!! $message !!}</li>
                        </ul>
                    </div>

                    <script>
                        // Set a timeout to hide the alert after 2000 milliseconds (2 seconds)
                        setTimeout(function () {
                            document.getElementById('validation-error-alert').style.display = 'none';
                        }, 4000);
                    </script>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" id="success-alert">
                        <ul>
                            <li>{!! $message !!}</li>
                        </ul>
                    </div>

                    <script>
                        setTimeout(function () {
                            document.getElementById('success-alert').style.display = 'none';
                        }, 4000);
                    </script>
                @endif
                <div class="ms-default-page container entry-content">
                    <div class="woocommerce">
                        <div class="coupon-toggle d-none">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="card-title">
                                            <span><i class="fa fa-window-maximize"></i> Have a coupon?</span>
                                            <button class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Click here to enter your code</button>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>If you have a coupon code, please apply it below.</p>
                                            <div class="coupon-code-input">
                                                <input type="text" name="coupon_code" placeholder="Coupon code" required="">
                                            </div>
                                            <button class="add-btn rts-btn btn-primary" type="submit">Apply Coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" action="{{route('placeOrder')}}" class="checkout woocommerce-checkout ms-woocommerce-checkout" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="full-grid">
                                        <div class="billing-fields">
                                            <div class="checkout-title">
                                                <h3>Billing details</h3>
                                            </div>
                                            <div class="form-content-box">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Name *</label>
                                                            <input id="name" name="name" class="form-control-mod" type="text" value="{{ auth()->check() ? auth()->user()->name : '' }}" required {{ auth()->check() ? 'readonly' : '' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Email address *</label>
                                                            <input id="email" name="email" class="form-control-mod" type="email" value="{{ auth()->check() ? auth()->user()->email : '' }}" required {{ auth()->check() ? 'readonly' : '' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Phone *</label>
                                                            <input id="phone" name="phone" class="form-control-mod" type="text" value="{{ auth()->check() ? auth()->user()->phone : '' }}" required {{ auth()->check() ? 'readonly' : '' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Street address *</label>
                                                            <input id="address1" name="address1" class="form-control-mod margin-bottom" type="text" placeholder="House number and street name" required>
                                                            <input id="address2" name="address2" class="form-control-mod" type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Town / City *</label>
                                                            <input id="city" name="city" class="form-control-mod" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>District *</label>
                                                            <select name="district" class="d-block" required>
                                                                <option value="">Select an option</option>
                                                                <option value="BD-05">Bagerhat</option>
                                                                <option value="BD-01">Bandarban</option>
                                                                <option value="BD-02">Barguna</option>
                                                                <option value="BD-06">Barishal</option>
                                                                <option value="BD-07">Bhola</option>
                                                                <option value="BD-03">Bogura</option>
                                                                <option value="BD-04">Brahmanbaria</option>
                                                                <option value="BD-09">Chandpur</option>
                                                                <option value="BD-10">Chattogram</option>
                                                                <option value="BD-12">Chuadanga</option>
                                                                <option value="BD-11">Cox's Bazar</option>
                                                                <option value="BD-08">Cumilla</option>
                                                                <option value="BD-13">Dhaka</option>
                                                                <option value="BD-14">Dinajpur</option>
                                                                <option value="BD-15">Faridpur </option>
                                                                <option value="BD-16">Feni</option>
                                                                <option value="BD-19">Gaibandha</option>
                                                                <option value="BD-18">Gazipur</option>
                                                                <option value="BD-17">Gopalganj</option>
                                                                <option value="BD-20">Habiganj</option>
                                                                <option value="BD-21">Jamalpur</option>
                                                                <option value="BD-22">Jashore</option>
                                                                <option value="BD-25">Jhalokati</option>
                                                                <option value="BD-23">Jhenaidah</option>
                                                                <option value="BD-24">Joypurhat</option>
                                                                <option value="BD-29">Khagrachhari</option>
                                                                <option value="BD-27">Khulna</option>
                                                                <option value="BD-26">Kishoreganj</option>
                                                                <option value="BD-28">Kurigram</option>
                                                                <option value="BD-30">Kushtia</option>
                                                                <option value="BD-31">Lakshmipur</option>
                                                                <option value="BD-32">Lalmonirhat</option>
                                                                <option value="BD-36">Madaripur</option>
                                                                <option value="BD-37">Magura</option>
                                                                <option value="BD-33">Manikganj </option>
                                                                <option value="BD-39">Meherpur</option>
                                                                <option value="BD-38">Moulvibazar</option>
                                                                <option value="BD-35">Munshiganj</option>
                                                                <option value="BD-34">Mymensingh</option>
                                                                <option value="BD-48">Naogaon</option>
                                                                <option value="BD-43">Narail</option>
                                                                <option value="BD-40">Narayanganj</option>
                                                                <option value="BD-42">Narsingdi</option>
                                                                <option value="BD-44">Natore</option>
                                                                <option value="BD-45">Nawabganj</option>
                                                                <option value="BD-41">Netrakona</option>
                                                                <option value="BD-46">Nilphamari</option>
                                                                <option value="BD-47">Noakhali</option>
                                                                <option value="BD-49">Pabna</option>
                                                                <option value="BD-52">Panchagarh</option>
                                                                <option value="BD-51">Patuakhali</option>
                                                                <option value="BD-50">Pirojpur</option>
                                                                <option value="BD-53">Rajbari</option>
                                                                <option value="BD-54">Rajshahi</option>
                                                                <option value="BD-56">Rangamati</option>
                                                                <option value="BD-55">Rangpur</option>
                                                                <option value="BD-58">Satkhira</option>
                                                                <option value="BD-62">Shariatpur</option>
                                                                <option value="BD-57">Sherpur</option>
                                                                <option value="BD-59">Sirajganj</option>
                                                                <option value="BD-61">Sunamganj</option>
                                                                <option value="BD-60">Sylhet</option>
                                                                <option value="BD-63">Tangail</option>
                                                                <option value="BD-64">Thakurgaon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Postcode / ZIP (optional)</label>
                                                            <input id="post_code" name="post_code" class="form-control-mod" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .billing-fields -->
                                        <div class="additional-fields d-none">
                                            <div class="form-content-box">
                                                <div class="checkout-title">
                                                    <h3>Additional information</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Order notes (optional)</label>
                                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ordered-product d-none">
                                            <div class="checkout-title">
                                                <h3>Your order</h3>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Safety Helmet <strong><i class="fa fa-close"></i> 1</strong></td>
                                                        <td>$30.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sledge Hammer <strong><i class="fa fa-close"></i> 1</strong></td>
                                                        <td>$30.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <th>$60.00</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <th>$60.00</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="payment-method mt-40 md-mt-20 d-none">
                                            <div class="top-area">
                                                <div class="payment-co"><span>PayPal</span> <img src="{{ asset('frontend') }}/assets/images/paypal.png" alt="PayPal Logo"></div>
                                                <div class="p-msg">Pay via PayPal you can pay with your credit card if you dont have a
                                                    PayPal account.</div>
                                            </div>
                                            <div class="bottom-area">
                                                <p class="mt-15">Your personal data will be used to process your order, support your
                                                    experience throughout this website, and for other purposes described in our privacy
                                                    policy.</p>
                                                <button class="add-btn rts-btn btn-primary" type="submit">Continue to payment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-5 col-md-4">
                                    <h3 id="order_review_heading">Your order</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="ms-checkout-review-order-table shop_table woocommerce-checkout-review-order-table">
                                            <tbody>
                                            @foreach (cartItems() as $key => $item)
                                                <tr class="cart_item">
                                                    <td colspan="2">
                                                        <div class="ms-checkout-product">
                                                            <div class="ms-checkout-product__thumbnail">
                                                                <img src="{{ asset('frontend/product_images/'.$item['product']->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Shop Image">
                                                            </div>
                                                            <div class="ms-checkout-product__content">
                                                                <h5>{{$item['product']->name}} <span class="product-quantity">({{$item['qty']}}× {{$item['product']->price}}৳)</span> </h5>
                                                                <span class="woocommerce-Price-amount amount"><bdi>{{$item['qty'] * $item['product']->price}}<span class="woocommerce-Price-currencySymbol">৳</span></bdi></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="woocommerce-Price-amount amount"><bdi>{{getTotalcartValue()}}<span class="woocommerce-Price-currencySymbol">৳</span></bdi></span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{getTotalcartValue()}}<span class="woocommerce-Price-currencySymbol">৳</span></bdi></span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <ul class="wc_payment_methods payment_methods methods d-none">
                                                <li class="woocommerce-notice woocommerce-notice--info woocommerce-info">
                                                    Sorry, it seems that there are no available payment methods for your
                                                    state. Please contact us if you require assistance or wish to make
                                                    alternate arrangements.
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <noscript>
                                                    Since your browser does not support JavaScript, or it is disabled,
                                                    please ensure you click the <em>Update Totals</em> button before
                                                    placing your order. You may be charged more than the amount stated
                                                    above if you fail to do so. <br />
                                                    <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                </noscript>
                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div class="woocommerce-privacy-policy-text">
                                                        <p>Your personal data will be used to process your order,
                                                            support your experience throughout this website, and for
                                                            other purposes described in our
                                                            <a href="#0" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-proceed-to-checkout wc-proceed-to-checkout">
                                                    <button type="submit" class="rts-btn btn-primary button"> Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
            <!--================= Checkout Area End =================-->
        </div>
    </main>
@endsection