@extends('layouts.app')

@section('meta_title','My Order List Account E commerce')
@section('meta_description','My Order List Account E commerce')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Liste des commandes</p></span> </div> </div>

                <div class="clearfix"></div>
            <br/>
            @if(count($orders) <= 0)
                <p style="color:black; margin-left:15px; margin-right:15px;">Désolé, aucun commande trouvée...</p>
            @else
                <table class="table table-bordered table-responsive">
                    <thead>
                    <th>ID</th>
                    <th>Shipping Option</th>
                    <th>Payment Option</th>
                    <th>Status</th>
                    <th>View</th>
                    <!--th>Return Request</th-->
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->shipping_option}}</td>
                            <td>{{ $order->payment_option }}</td>
                            <td>{{ $order->orderStatus->name }}</td>
                            <td>
                                <a href="{{ route('my-account.order.view',$order->id )}}">View</a>
                            </td>
                            <!--td>
                                <a href=" route('my-account.order-return.create',$order->id )}}">Return Request</a>
                            </td-->


                        </tr>
                    @endforeach

                    </tbody>

                </table>
            @endif

        </div>
    </div>
    </div>
@endsection

