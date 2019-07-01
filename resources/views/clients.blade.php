@extends('layout') @section('content') @if (session()->has('flash'))
<div class="alert alert-success"> {{ session('flash') }} </div>
@endif

<div class="flex-center position-ref full-height">
  <div class="content">
    <div class="title m-b-md">
      Clients
    </div>

    <div>
      <form action="{{route('clientsupdate')}}" method="POST" enctype="multipart/form-data" id="your_form">
        @csrf
        <div class="form-row">
          <label for="product">Product</label>
          <select class="custom-select my-1 mr-sm-2" name="id" id="miid" required>
            <option selected value="">Choose a product...</option>
            @foreach ($products as $product)

            <option value="{{$product->id}}" id="myprice" data-price='{{$product->price}}'>{{$product->name}}</option>
            <!-- <option value="product2">product2</option>
              <option value="product3">product3</option> -->
            @endforeach {{--
            <input id="id" name="id" type="hidden" value="{{$product->id}}"> --}}

          </select>
          <div class="col-md-4 mb-3">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity" required>
          </div>
          {{--
          <div class="col-md-4 mb-3">
            <label for="lot">Lot</label>
            <input type="text" class="form-control" name="lot" placeholder="Lot" required>
          </div> --}}
          <div class="col-md-4 mb-3">
            <label for="price">Price</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="price">$</span>
              </div>
              <input type="text" class="form-control" readonly value="" name="price" id="total" placeholder="0" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
      </div>
    </div>
  </div>
  @section('scripts')

  <script type="text/javascript">
    var price = 0;
    $(document).ready(function() {
      $(".custom-select").change(function() {
        price = $('#myprice').data('price');
      });

      $("#quantity").keyup(function() {
        var nan = document.forms["your_form"]["quantity"].value;
        if (nan > 0) {
          var x = $('#quantity').val() * price;
          $('#total').val(x);
          return true;
        } else {
          alert("Quantity must be greater than 0");
          return false;
        }
      });
    });
  </script>
  @endsection @endsection
