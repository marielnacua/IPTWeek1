@extends('base')

@section('content')
<br><br>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
            <div class="card-body p-4 p-md-5">
            <h2 class="text-uppercase text-center mb-5">Add Product</h2>
                    <form action="{{url('/product/create')}}" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="name" placeholder="Product Name" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" name="description" id="description" placeholder="Description" class="form-control">
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" name="price" id="price" placeholder="Price" class="form-control">
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">Add</button>
                            <a href="{{ url('/product') }}" class="btn btn-primary w-100 text-white">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection