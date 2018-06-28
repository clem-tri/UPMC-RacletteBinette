@extends('layouts.app')

@section('meta_title')
    {{ $title }}
@endsection

@section('meta_description')
    {{ $description }}
@endsection

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang-all.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-4">
                @include('product.view.product-image',['imageType' => 'largeUrl','extraImage' => true])
                </div>

            <div class="col-8">
                <h1 class="product-name">{{ $product->name }}</h1>

                <div class="product-price">
                    <h2>
                        <span>€</span>
                        <span class="price">{{ number_format($product->price,2) }}</span>
                    </h2>

                </div>

                    @if($product->type == 'BASIC')
                        @include('product.view.type.basic-add-to-cart')
                    @endif
                    @if($product->type == 'VARIATION' )
                        @include('product.view.type.variation-add-to-cart')
                    @endif
                    @if($product->type == 'DOWNLOADABLE' )
                        @include('product.view.type.downloadable-add-to-cart')
                    @endif

                <div class="float-left">
                        @if(isset(Auth::user()->id) && Auth::user()->isInWishlist($product->id))
                            <a class="btn btn-danger" href="{{ route('my-account.wishlist.remove', $product->slug) }}">
                                <i class="fa fa-heart"></i>
                            </a>
                        @else
                            <a class="btn btn-warning" href="{{ route('my-account.wishlist.add', $product->slug) }}">
                                <i class="fa fa-heart"></i>
                            </a>

                        @endif
                    </div>

                </div>


        </div>
        @if($calendar != null)
        <div class="col-md-12" >
        <div class="col-md-6 offset-md-3">

                CALENDRIER D'USAGE
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}


        </div>
            @endif


        </div>
        <div class="row">
            <p>&nbsp;</p>
        </div>
        <div class="row">

            <div class="col-md-9 offset-2 mt-3">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item active">
                        <a data-toggle="tab" class="nav-link" href="#description">
                            <div> DESCRIPTION</div>
                        </a>
                    </li>

                    @foreach(Tabs::all('product-view') as $key => $tab)
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#{{ $key }}">
                                {{ $tab->label }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content ">
                    <div id="description" class="tab-pane pt-3 active">

                        <p>{!! $product->description !!}</p>
                    </div>


                    @foreach(Tabs::all('product-view') as $key => $tab)
                        @include($tab->view)
                    @endforeach
                </div>

                @include("avored-related::related.product.list")


                @include("avored-review::product.review")

            </div>
        </div>

    </div>
@endsection
