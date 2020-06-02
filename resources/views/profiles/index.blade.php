@extends('layouts.app')
@extends('orders.create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>

                <div class="card-body">
                    <h4>
                        {{ $user->username }}
                    </h4>
                </div>
            </div>

            <div class="container justify-content-center py-4">
                @foreach($user->orders as $order)
                <div class="col-md-4">
                    <div class="row card">
                        <div class="card-body p-4">
                            @for ($i = 0; $i < count($order->products); $i++)
                                <h3 class="card-title">Order {{ $i + 1 }}</h3>
                                <p class="card-text">
                                    <span>{{ $order->products[$i]->name }},</span>
                                    <span>{{ $order->products[$i]->sizes[0]->name }},</span>
                                    <span>{{ $order->products[$i]->flavors[0]->name }}</span>
                                </p>
                            @endfor
                        </div>
                    </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection