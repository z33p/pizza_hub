{{-- @extends('welcome') --}}
@extends('layouts.app')

@section('content')
<products-menu
    products-url="{{ route('products.index') }}"
    cart-products-url="{{ route('profiles.showCartProducts') }}"
    carts-push-url="{{ route('carts.push') }}"
    store-order-url="{{ route('orders.store')}}"
></products-menu>
@endsection