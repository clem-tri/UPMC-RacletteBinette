<div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px; margin-top:20px;">
    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Méthode de livraison</p></span> </div> </div>

    <div class="card-body shipping-option" style="background-color:white;">
        <p style="color:#68B42F;">Veuillez sélectionner votre méthode de livraison pour cette commande.</p>

        @foreach($shippingOptions as $shippingOption)


                <div class="form-check">

                    @if($shippingOption->enable())
                    <input type="radio" name="shipping_option"

                           @if($errors->has('shipping_option'))
                           class="is-invalid form-check-input shipping_option_radio"
                           @else
                           class="shipping_option_radio form-check-input"
                           @endif

                           data-title="{{ $shippingOption->name() }}"
                           data-cost="{{ number_format($shippingOption->amount(),2) }}"
                           id="{{ $shippingOption->identifier() }}"
                           value="{{ $shippingOption->identifier() }}">

                    <label for="{{ $shippingOption->identifier() }}" class="form-check-label">

                        @if(null === $shippingOption->amount())
                            {{ $shippingOption->name() }}
                        @else
                            {{ $shippingOption->name() . " €" . number_format($shippingOption->amount(),2) }}
                        @endif




                    </label>
                    @endif
                    @if ($errors->has('shipping_option'))
                        <div class="invalid-feedback" style="display: block">
                            {{ $errors->first('shipping_option') }}
                        </div>
                    @endif

                </div>

        @endforeach

        @foreach($shippingOptions as $shippingOption)
            @if($shippingOption->enable())
                @include($shippingOption->view(), $shippingOption->with())
            @endif
        @endforeach


    </div>
</div>