@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View User') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.view',$user->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" disabled name="name" value="{{ $user->name }}"  autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" disabled name="email" value="{{ $user->email }}"  autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select name="role_id"  class="form-control" disabled> 
                                @foreach( App\Models\Role::getRoleName() as $key=> $value)
                                <option <?= ($key == $user->role_id) ? "selected" : " " ?> value="{{$key}}">{{$value}}</option>
                                @endforeach
                                </select> 
                            </div>                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
