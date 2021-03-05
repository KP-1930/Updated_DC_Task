@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))
        <span style="display:flex; justify-content: center" class="alert alert-success">
        {{$message}}
        </span>  
@endif


@include('notify::messages')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Car Details') }}</div>   
                <div class="d-flex row">
                       <div class="ml-auto p-4 column">
                       @role('Admin|User')
                        <a href="{{ route('CarCategory.create')}}" class="btn btn-primary" >Add</a>
                        @endrole       
                       </div>
                    </div>  
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">@sortablelink('id')</th>
                        <th scope="col">@sortablelink('regno')</th>
                        <th scope="col">@sortablelink('carmodel')</th>
                        <th scope="col">@sortablelink('price')</th>
                        <th scope="col">@sortablelink('created_at')</th>
                        <th scope="col">@sortablelink('updated_at')</th>
                        <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($input as $k)
                        <tr>
                        <th>{{$k->id}}</th>
                        <td>{{$k->regno}}</td>
                        <td>{{$k->carmodel}}</td>
                        <td>{{$k->price}}</td>
                        <td>{{$k->created_at}}</td>
                        <td>{{$k->updated_at}}</td>
                        <td>
                         @role('Admin|User|Vendor')
                        <a href="{{route('CarCategory.view',$k->id)}}" class="fa fa-eye"> </a>  
                         @endrole
                         @role('Admin')                  
                        <a href="{{route('CarCategory.edit',$k->id)}}" class="fa fa-edit"> </a>                    
                        <a href="{{route('CarCategory.delete',$k->id)}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="fa fa-trash"></a>
                      @endrole
                      </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{ $input->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>   
</div>    



@endsection