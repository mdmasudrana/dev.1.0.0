@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>


    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div>

<div class="col-md-12">
<form action="" method="post" >
  @csrf
<div class="col-md-5 txt">
    <div ><div>
        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
        <input type="name" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <label for="exampleFormControlInput1" class="form-label">Product SKU</label>
        <input type="name" name="sku" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        
    
    </div>
        <div>
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>

   
    </div>
@endsection
