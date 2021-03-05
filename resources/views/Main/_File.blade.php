@extends('layouts.app')
@section('content')
<body>
    @if(isset($user))
        {{ Form::model($user, ['route' => ['user.update', $user->id],  'method' => 'PUT']) }}
    @else
    {{ Form::open(['route' => 'user.store', 'method' => 'POST']) }}

    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(isset($user))
                <h2>{{ ('Edit User') }}</h2>
            @else
                <h2>{{ ('Create User') }}</h2>
            @endif 

           
                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', old('name'),['id'=>'name', 'class'=>'form-control','placeholder'=>'Enter Name']) }}                   
                                    @if($errors->has('name'))<p style="color:red;">{{$errors->first('name')}} @endif <br>
                            </div>
                        </div>
                    </div> 

                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::email('email', old('email'),['id'=>'email', 'class'=>'form-control','placeholder'=>'Enter Email']) }}                   
                                    @if($errors->has('email'))<p style="color:red;">{{$errors->first('email')}} @endif <br>
                            </div>
                        </div>
                    </div> 

                    @if(!isset($user))
                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            
                                    {{ Form::label('password', 'Password') }}
                                    {{ Form::password('password',['id'=>'password', 'class'=>'form-control','placeholder'=>'Enter Password']) }}                   
                                    @if($errors->has('password'))<p style="color:red;">{{$errors->first('password')}} @endif <br>
                            </div>
                        </div>
                    </div> 

                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            
                                    {{ Form::label('password_confirmation', 'Confirm_Password') }}
                                    {{ Form::password('password_confirmation',['id'=>'password_confirmation', 'class'=>'form-control']) }}                   
                                    @if($errors->has('password_confirmation'))<p style="color:red;">{{$errors->first('password_confirmation')}} @endif <br>
                            </div>
                        </div>
                    </div> 
                    @endif
                    
                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            
                                    {{ Form::label('role_id', 'Role') }}
                                    {{ Form::select('role_id',\App\Models\Role::getRoleName(),old('role_id'), ['class'=>'form-control', 'placeholder' => 'please select Role']) }}                  
                                    @if($errors->has('role_id'))<p style="color:red;">{{$errors->first('role_id')}} @endif <br>
                            </div>
                        </div>
                    </div> 


                    <div class="col-12">
                        <hr>
                            {{Form::submit(('save'),['class'=>'btn btn-primary btn-lg'])}}
                            {{Html::link(route('user.create'),('cancel'),['class'=>'btn btn-secondary btn-lg'])}}
                        <hr>
                    </div>
                              
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

</body>
@endsection