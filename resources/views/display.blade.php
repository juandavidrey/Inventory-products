<head>
  <title>Display products</title>
</head>
@extends('layout') @section('content') @include('navbar')

  <div class="flex-center position-ref full-height">

    <div class="content">
      <div class="title m-b-md">
        <p>Display products</p>
      </div>

      <div class="box-body">
        <table id="products-table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name product</th>
              <th>Lot</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->lot }}</td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->price }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
