@extends('layouts.app')
@section('content')
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
      <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Role</th>
       
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $customer)
      <tr>
       <td>{{ $customer->id }}</td>
       <td>{{ $customer->name}}</td>
       <td>{{ $customer->email }}</td>
       <td>{{ $customer->roles['name'] }}</td>

       
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
@endsection
