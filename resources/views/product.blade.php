@extends('base')
@section('content')
<br><br><br><br><br><br>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container"> 
        <div class="main-body">
            <div class="row gutters-sm">
            <div class="col-md-12 mb-8">
            <div class="mb-1 float-end">
                <br>
                <a href="{{url('product/create')}}" class="btn btn-primary bg-sm">
                    Add Product
                </a>
            </div>
                <h1 class="text-blue">LIST OF PRODUCTS</h1>
                <table class="table table-sm">
                    <thead class="bg-primary text-white" style="font-size: 1em;">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($items as $prod)
                        <tr>
                            <td>{{$prod->name}}</td>
                            <td>{{$prod->description}}</td>
                            <td>{{$prod->price}}</td>
                            <td>{{$prod->quantity}}</td>
                            <td>
                                <a href="{{ url('product/edit/' . $prod->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                                    Edit
                                </a> &nbsp;
                                <a href="{{ url('product/delete/' . $prod->id) }}" class="btn btn-danger btn-sm" type="submit">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop