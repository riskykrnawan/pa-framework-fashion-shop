@extends('admin.products.layout')
@section('content.products')
  <body>
    <div class="container-fluid">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="pt-2 pb-2 mb-3 border-bottom"></div>
          @include('admin.products.table_products')
        </main>
      </div>
    </div>
@endsection