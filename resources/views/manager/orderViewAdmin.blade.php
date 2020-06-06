
@extends('admin.base')

@section('adminbase')

<a href="AdminOrder/create " class="btn btn-info m-2">Add New Order</a>
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h3">#</th>
      <th scope="col" class="text-light h3">Description</th>
      <th scope="col" class="text-light h3">State</th>
      <th scope="col" class="text-light h3">Cost</th>
      <th scope="col" class="text-light h3">Contract Image</th>
    </tr>

      @foreach($OrdersDetails as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->description}}</td>
            <td>{{$order->state}}</td>
            <td>{{$order->cost}}</td>
            <td>
              <img src="{{ asset ( 'images/AdminOrderImages/' . $order->contractImg) }}" width="80" height="80"/>
            </td>

            <td>
                {!! Form::open(['route' => ['manager.AdminOrder.destroy', $order->id] , 'method'=>'delete']) !!}
                                    {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>

            <td>
                <a href="{{ route('manager.AdminOrder.edit' , $order->id) }}" class="btn btn-success">Update !</a>
            </td>
        <tr>
      @endforeach


  
  </thead>
  <tbody>
    
  </tbody>
</table>

@endsection


