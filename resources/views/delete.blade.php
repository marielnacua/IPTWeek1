@extends('base')

@section('content')
<br><br><br><br>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
            <div class="card-body p-4 p-md-5">

            <h2 class="text-uppercase text-center mb-5">Delete Product?</h2>
                <form action="{{url('/product/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h6 class="mt-2 mb-3">
                        Delete this book {{ $item->name }}? 
                    </h6>
                    
                    <div>
                        <button class="btn btn-danger" type="submit">Delete</button>  &nbsp;&nbsp; 
                        <a href="{{ url('/product') }}" class="btn btn-primary text-white">Cancel</a>   
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection