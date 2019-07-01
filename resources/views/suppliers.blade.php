  @extends('layout')
  @section('content')

  @if (session()->has('flash'))
    <div class="alert alert-success"> {{ session('flash') }} </div>
  @endif
  <div class="flex-center position-ref full-height">

    <div class="content">
      <div class="title m-b-md">
        Suppliers
      </div>
    </div>
    <div>
      <form action="{{route('suppliersupdate')}}" method="POST" enctype="multipart/form-data"
      id="your_form">
        {{-- @method('PUT') --}}
        @csrf
        <div class="form-row">
          <label for="product">Product</label>
          <select class="custom-select my-1 mr-sm-2" onchange="setId();" name="id" required>
            <option selected value="">Choose a product...</option>
            @foreach ($products as $product)

            <option value="{{$product->id}}">{{$product->name}}</option>
            <!-- <option value="product2">product2</option>
            <option value="product3">product3</option> -->
            @endforeach
            {{-- <input id="id" name="id" type="hidden" value="{{$product->id}}"> --}}

          </select>
          <div class="col-md-4 mb-3">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="quantity" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="lot">Lot</label>
            <input type="text" class="form-control" name="lot" placeholder="Lot" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="price">Price</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="price">$</span>
              </div>
              <input type="text" class="form-control" name="price" placeholder="0" aria-describedby="inputGroupPrepend2" required>
            </div>
            {{-- <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div> --}}
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
    </div>

  </div>
  @section('scripts')
    {{-- <script src="{{asset('/js/bootstrap-datepicker.min.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/en-ca.js" defer></script>

  <script type="text/javascript">
            $(function () {
              // $('#datetimepicker1').datetimepicker();
              $("#datetimepicker1").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
            });
        </script>
@endsection
@endsection
