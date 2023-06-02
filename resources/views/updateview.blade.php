@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border mt-5 p-2 border-info">
    <h2 class="text-center text-primary">Update </h2>
    <form action="updatedata" method="get">
        <div class="mb-3">
       <label for="">Product Name</label>
       <input type="text" name="name" value="{{$pname}}" class="form-control">
        </div>

        <div class="mb-2">
       <label for="">Product Price</label>
       <input type="text" name="price" value="{{$pprice}}" class="form-control">
        </div>
        <br>
        <input type="hidden" name="id" value="{{$pid}}"> 
        <div class="text-center">

        <button class="btn btn-primary rounded-pill" type="submit">Update</button>
        </div>

    </form>
</div>


@endsection