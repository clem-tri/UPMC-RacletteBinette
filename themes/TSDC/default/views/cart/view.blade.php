@extends('layouts.app')

@section('meta_title','Cart Page AvoRed E commerce')
@section('meta_description','Cart Page AvoRed E commerce')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1">Panier</div>

                @if($cartProducts !== null && $cartProducts->count() > 0)

                    <table class="table table-responsive">
                        <tr>
                            @if(Cart::hasTax())
                                <th class="col-7">Produit</th>
                            @else
                                <th class="col-8">Produit</th>
                            @endif
                            <th class="col-1" style="text-align: center">Quantité</th>
                            <th class="col-1 text-center">Prix</th>
                            @if(Cart::hasTax())
                                <th class="col-1 text-center">Taxe</th>
                            @endif
                            <th class="col-1 text-center">Sous-total</th>
                            <th class="col-1"> </th>
                        </tr>
                        <?php $total = 0; $taxTotal = 0;$giftCouponAmount = 0; ?>
                        @foreach($cartProducts as $product)

                            @php
                                $total += $product->price();
                            @endphp
                            @include('cart._single_product', ['product', $product])

                        @endforeach


                        <tr>

                            <td class="col-8">&nbsp;  </td>
                            <td class="col-1">&nbsp;  </td>
                            <td class="col-1"> &nbsp;  </td>
                            <td class="col-1"> &nbsp;  </td>
                            <td class="col-1"><h6>Total</h6></td>
                            <td class="col-1 text-right"><h6>
                                    <strong>€{{ number_format((Cart::total()),2) }}</strong></h6></td>
                        </tr>

                        @if(Cart::hasTax())
                        <tr>

                            <td class="col-8">&nbsp;  </td>
                            <td class="col-1">&nbsp;  </td>
                            <td class="col-1"> &nbsp;  </td>
                            <td class="col-1"> &nbsp;  </td>
                            <td class="col-1"><h6>Tax Total</h6></td>
                            <td class="col-1 text-right"><h6>
                                    <strong>€{{ number_format((Cart::taxTotal()),2) }}</strong></h6></td>
                        </tr>
                        @endif
                        <tr>

                            <td class="col-8">&nbsp;  </td>
                            <td class="col-1">  </td>
                            <td class="col-1"> &nbsp;</td>
                            <td class="col-1">  </td>
                            <td class="col-1">
                                <a href="{{ route('home') }}" class="btn btn-light">
                                    <span class="fa fa-shopping-cart"></span> Continuer les achats
                                </a>
                            </td>
                            <td class="col-1 text-right">
                                <a href="{{ route('checkout.index') }}" class="btn btn-success">
                                    Valider le panier <span class="fa fa-play-circle"></span>
                                </a>
                            </td>
                        </tr>
                    </table>


                @else

                    <p>Il n'y a pas de produit dans le panier.</p>
                @endif

            </div>
        </div>
    </div>
    </div>
@endsection