



@extends('admin.base')


@section('adminbase')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">




<link rel="stylesheet" type="text/css" href="{{ asset('css/fbstyle.css') }}" >

    <div class="container mt-4">

            <div class="row">
                    <div class="col-lg-8">
                        
                    {{ Form::open(['route' => 'manager.AdminOrder.store','enctype' => 'multipart/form-data','method'=>'post'])}}

                  
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="text-light">Enter Description of Order</label>
                            {!! Form::text('description', null, ['required'=>'true','class'=>"form-control",'placeholder'=>'orderDesc']) !!}
                        </div>

                        <div class="form-group text-light">
                            <label for="exampleFormControlFile1"> Enter State Of Order</label>
                            {!! Form::text('state', null, ['required'=>'true','class'=>"form-control",'placeholder'=>'orderState']) !!}

                        </div>
                        
                        <div class="form-group text-light">
                        {!! Form::select('user_id', $user , null, ['class' => 'form-control']) !!}

                        </div>
                            

                        <div class="form-group text-light">
                            <label for="exampleFormControlFile1"> Enter Cost Of Order</label>
                            {!! Form::text('cost', null, ['required'=>'true','class'=>"form-control",'placeholder'=>'orderCost']) !!}

                        </div>

                        <div class="form-group text-light">
                            
                            {!! Form::file('contractImg', ['class'=>' form-control','id'=>"validatedCustomFile", 'required']) !!} 
                            <label for="validatedCustomFile"> Add Image Of UserOrder</label>
                        </div>
                        {!! Form::submit('ADD Order', ['class'=>'btn btn-info']) !!}
                    </form>


                    </div>
            </div>


    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@endsection

{{ Form::close() }}