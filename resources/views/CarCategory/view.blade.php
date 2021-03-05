@extends('layouts.app')
@section('content')

<body>
<form method="post" action="{{ route('CarCategory.view',$input->id) }}" enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Car Details') }}</div>    
                    <div class="grid"> <!--Start Grid-->
                    <div class="col-1-3">
                            <div class="controls">
                                    <label for="regno">Reg. Number</label>
                                    <input type="text" id="regno" class="form-control" name="regno" value="{{ $input->regno }}" disabled>         
                            </div>
                        </div>
                    </div> <!--End Grid-->

                    <div class="grid"> <!--Start Grid-->
                    <div class="col-1-3">
                            <div class="controls">
                                    <label for="carmodel">Car Model</label>
                                    <input type="text"  class="form-control" name="carmodel[]" value="{{ $input->carmodel }}" disabled>         
                            </select>            
                            </div>
                        </div>   
                    </div>        
                    
                    <div class="col-1-3">
                            <div class="controls">
                                    <label for="something">Car Price</label>
                                    <input type="number"  class="form-control mb-2" name="price" value="{{$input->price}}" disabled>
                            </div>
                        </div>     
            </div>
        </div>
    </div>
</div>
</form>
</body>
@endsection