@extends('frontend.layouts.app')
@section('content')
    <main class="ms-main">
        <div class="container py-5">
            <!-- Dashboard Header -->
            <div class="row mb-4">
                <div class="col-12 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                    <div>
                        <h2 class="fw-bold">Welcome, {{ Auth::user()->name }}</h2>
                        <p class="text-muted">Manage your orders, profile, and support from here.</p>
                    </div>
                    <form action="{{ route('customerLogout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>

            <!-- Cards Section -->
            <div class="row mb-5">
                <!-- Orders Card -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Recent Orders</h5>
                            <p class="card-text text-muted">Track your latest orders.</p>
                            <a href="#ordersSection" class="btn btn-primary">View Orders</a>
                        </div>
                    </div>
                </div>
                <!-- Profile Card -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Profile Settings</h5>
                            <p class="card-text text-muted">Update your details and preferences.</p>
                            <a href="{{ route('customerProfile') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <!-- Support Card -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Support</h5>
                            <p class="card-text text-muted">Need help? Contact support.</p>
                            <a href="{{ route('customerSupport') }}" class="btn btn-primary">Get Support</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div id="ordersSection" class="mb-5">
                <h3 class="fw-bold mb-3">Recent Orders</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->created_at->format('d M Y') }}</td>
                                    <td>
                                        <select name="status" tabindex="-98" disabled>                     
                                            @foreach ( orderStatuses() as $value => $text)                                             
                                                  <option {{ $value == $order->order_status ? 'selected' : '' }} value="{{ $value }}">{{ $text }}</option> 
                                            @endforeach   
                                         </select>
                                    </td>
                                    <td>{{ number_format($order->total_amount, 2) }}BDT</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No recent orders found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
