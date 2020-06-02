@section('orders.create')
    <div class="container">
        <form action="{{ route('orders.store')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2 py-n5">
                    <button class="my-2 btn btn-primary float-right">
                        Create Order
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection