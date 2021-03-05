@extends('layouts.app')
@section('content')
<body>
    @if(isset($input))
        {{ Form::model($input, ['route' => ['CarCategory.update', $input->id], 'enctype' => 'multipart/form-data', 'method' => 'PUT']) }}
    @else
    {{ Form::open(['route' => 'CarCategory.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}

    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(isset($input))
                <h2>{{ ('Edit Details') }}</h2>
            @else
                <h2>{{ ('Create Details') }}</h2>
            @endif 

           
                    <div class="grid">
                        <div class="col-1-3">
                            <div class="controls">
                            @if(isset($input))
                                    {{ Form::label('regno', 'Reg. No') }}
                                    {{ Form::text('regno', old('regno'),['id'=>'regno', 'class'=>'form-control','placeholder'=>'Enter Reg-No','disabled'=>'disabled']) }}
                            @else   
                            {{ Form::label('regno', 'Reg. No') }}
                                    {{ Form::text('regno', old('regno'),['id'=>'regno', 'class'=>'form-control','placeholder'=>'Enter Reg-No']) }}     
                            @endif        
                                    @if($errors->has('regno'))<p style="color:red;">{{$errors->first('regno')}} @endif <br>
                            </div>
                        </div>
                    </div> 


                  
                    <div class="grid"> 
                        <div class="col-1-3">
                            <div class="controls">
                            {{ Form::label('carmodel', 'CarModel') }}      
                            {{ Form::select('carmodel[]', ['Renault Kiger' => 'Renault Kiger', 'Mahindra Thar' => 'Mahindra Thar', 'Kia Seltos' => 'Kia Seltos', 'Maruti Swift' => 'Maruti Swift', 'Hyundai Creta' => 'Hyundai Creta', 'Hyundai i20' => 'Hyundai i20', 'Hyundai i10' => 'Hyundai i10'], old('data'), ['class'=>'form-control select2', 'id' => 'lang', 'multiple' => 'true']) }}        
                            
                           </div>
                        </div>   
                    </div>        


                    <div class="grid">
                         <div class="col-1-3">
                            <div class="controls">
                                    
                                    {{ Form::label('price', 'price') }}
                                    {{ Form::number('price', old('price'), ['id'=>'price', 'class'=>'form-control','placeholder'=>'Enter Car Price']) }}
                                    @if($errors->has('price'))<p style="color:red;">{{$errors->first('price')}} @endif <br>

                            </div>
                        </div> 
                    </div>      


                    <div class="col-12">
                        <hr>
                            {{Form::submit(('save'),['class'=>'btn btn-primary btn-lg'])}}
                            {{Html::link(route('CarCategory'),('cancel'),['class'=>'btn btn-secondary btn-lg'])}}
                        <hr>
                    </div>
                              
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

</body>
@endsection