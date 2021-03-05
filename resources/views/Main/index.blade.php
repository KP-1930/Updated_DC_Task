@extends('layouts.app')
@section('content')


@if ($message = Session::get('success'))
        <div class="alert alert-success ">
        {{$message}}
        </div>
@endif



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('UserGrid') }}</div>
                    <div class="d-flex row">
                       <div class="ml-auto p-4 column">
                       @role('Admin|User')
                        <a href="{{ route('user.create')}}" class="btn btn-primary" >Add</a>
                        @endrole       
                        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-success">Generate PDF</a>
                       </div>
                    </div>


                    <!-- for search functionality -->
                    
                    <div class="container">
                      <form method="POST" action="{{route('search')}}">
                      @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="text" placeholder="Search Name" class="form-control" name="name" value="{{request('name')}}">
                            </div>
                            <div class="col-md-4">
                                <input type="email" placeholder="Search Email" class="form-control" name="email" value="{{request('email')}}">
                            </div>
                            <div class="col-md-4">
                              <select name="role_id"  class="form-control">
                              <option selected value="" selected>Please Select</option>
                              @foreach( App\Models\Role::getRoleName() as $key=> $value)
                              <option value="{{$key}}"  <?= (request('role_id') == $key)? "selected='selected'":""?>>{{$value}}</option>
                              @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="border border-light p-3 mb-4">
                          <div class="text-center">
                             <button type="submit" class="btn btn-primary">Search</button>
                           </div>
                        </div>
                        </form> 
                   </div>  
                     

                <div class="card-body">                 
                <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">@sortablelink('id')</th>
                  <th scope="col">@sortablelink('name')</th>
                  <th scope="col">@sortablelink('email')</th>
                  <th scope="col">@sortablelink('role')</th>
                  <th scope="col">@sortablelink('Status')</th>
                  <th scope="col">@sortablelink('created_at')</th>
                  <th scope="col">Actions</th>  
                </tr>
              </thead>
              <tbody>
              @foreach($user as $k)
                <tr>
                  <td>{{$k->id}}</td>
                  <td>{{$k->name}}</td>
                  <td>{{$k->email}}</td>
                  <td>{{$k->rolesOfUser['name']}}</td>
                  <td>
                  @if($k->isOnline())
                  <small class ="badge badge-success">Active</small>
                  @else
                  <small class ="badge badge-danger">InActive</small>
                  @endif
                  </td>
                  <td>{{$k->created_at}}</td>
                  <td>
                      @role('Admin|User|Vendor')
                      <a href="{{route('user.view',$k->id)}}" class="fa fa-eye"> </a>  
                      @endrole
                      @role('Admin')                  
                      <a href="{{route('user.edit',$k->id)}}" class="fa fa-edit"> </a>                    
                      <a href="{{route('user.delete',$k->id)}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="fa fa-trash"></a>
                      @endrole
                      </td>
                      
                </tr>
              </tbody>
              @endforeach
            </table>
           {{ $user->links('pagination::bootstrap-4') }}

            @if(session::has('no-results'))
            <span style="display:flex; justify-content: center">{{ Session::get('no-results')}}</span>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection