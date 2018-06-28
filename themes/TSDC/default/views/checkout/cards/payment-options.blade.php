<div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px; margin-top:20px;">
    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Méthode de paiement</p></span> </div> </div>

    <div class="card-body payment-options" style="background-color:white;">

        <p style="color:#68B42F">Veuillez sélectionner votre méthode de paiement pour cette commande.</p>

        <div class="payment-radio-options">
            @foreach($paymentOptions as $paymentOption)

                @if(true === $paymentOption->enable())

                    <div class="form-check">

                        <input class="avored-payment-option form-check-input {{ $errors->has('payment_option') ? ' is-invalid' : '' }}"
                               type="radio" name="payment_option"
                               id="{{ $paymentOption->identifier() }}"
                               value="{{ $paymentOption->identifier() }}">

                        <label for="{{ $paymentOption->identifier() }}"
                               class="form-check-label" style="color:#68B42F;">
                            {!! $paymentOption->name() !!}
                        </label>

                        @if ($errors->has('payment_option'))
                            <div class="invalid-feedback">
                                {{ $errors->first('payment_option') }}
                            </div>
                        @endif
                    </div>

                @endif

            @endforeach
        </div>

        @foreach($paymentOptions as $paymentOption)
            @if($paymentOption->enable())
                @include($paymentOption->view(), $paymentOption->with())
            @endif
        @endforeach

    </div>
</div>


