@extends('admin.master')

@section('title', @trans('admin.label_all_orders'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <p class="card-description">
                            Add class <code>.table</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>                            
                                    <tr>
                                        <td>{{ $orderDetail->order->code }}</td>
                                        <td>{{ $orderDetail->product->name }}</td>
                                        <td>{{ $orderDetail->quantity }}</td>
                                        <td>{{ $orderDetail->product->price }}</td>
                                        <td>{{ ($orderDetail->product->price) * ($orderDetail->quantity) }}</td>
                                        <td>{{ $orderDetail->created_at }}</td>
                                    </tr>                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection