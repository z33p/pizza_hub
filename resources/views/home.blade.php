{{-- @extends('welcome') --}}
@extends('layouts.app')

@section('content')
    <div class="p-4">
        <div class="px-4 d-flex justify-content-between">
            <h1>Menu</h1>
            <a href="#" data-toggle="modal" data-target="#cart-view">
                <h3>Cart: <span id="cart-count">{{ $user->cart->products->count() }}</span></h3>
            </a>
        
            {{-- Modal --}}
            <div id="cart-view" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Cart</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary">Order</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    <div class="col-md-12 col-lg-4 p-4">
                        <div class="card" style="width: 286px;">
                            <img class="card-img-top" src="{{ $product->figure }}" style="width: 286px; height: 180px"/>
                            <div class="card-body p-4">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-subtitle">Detalhes: {{ $product->caption }}</h6>
                                <br>
                                <p class="card-text">Sabor: {{ $product->flavors[0]->name }}<br>Tamanho: {{ $product->sizes[0]->name }}</p>
                                <p class="card-text float-right">
                                <buy-product-btn
                                    req-url="{{ route('carts.push') }}"
                                    product-id="{{ $product->id }}"
                                    product-price="{{ $product->price }}"
                                >
                                </buy-product-btn>    
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection