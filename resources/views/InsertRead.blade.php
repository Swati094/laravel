@extends('welcome')
@section('content')


<center>
<button type="button" class="btn btn-success fw-bold fs-4 rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
            
        @csrf

        <div class="mb-2">
                <input type="text" name="pname" id="pname" placeholder="Enter product name" class="form-control">

            </div>
            <div class="mb-2">
                <input type="text" name="pprice" id="" placeholder="Enter product price" class="form-control">

            </div>
            <div class="mb-2">
                <input type="file" name="image" id=""  class="form-control">

            </div>
            <button type="submit" class="btn btn-success fw-bold fs-4 rounded-pill" >Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-5">
  <thead  class="text-center ">
    <th>Id</th>
    <th>Product Name</th>
    <th>Product price</th>
    <th>Product Image</th>   
    <th>Action</th>
  </thead>
  <!-- show table data -->
  <tbody class="text-danger text-center bg-light fs-5">
    <?php $counter = 1; ?>
    @foreach($data as $item)
    <tr>
      <form action="updatedelete" method="get">
      <td class="pt-5"> <input type="hidden" name="id" value="{{$item['Id']}}"> {{$counter++}}</td>
      <td class="pt-5"><input type="hidden" name="name" value="{{$item['PName']}}">{{$item['PName']}}</td>
      <td class="pt-5"><input type="hidden" name="price" value="{{$item['Pprice']}}">{{$item['Pprice']}}</td>
      
      <td class="pt-5"><img src="images/{{$item['PImage']}}" width="80px" height="80px" alt=""></td>
      <td class="pt-5"> <input type="submit" name="update" value="Update" class="btn btn-primary"> 
       <input type="submit" value="Delete" class="btn btn-danger"> </td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection