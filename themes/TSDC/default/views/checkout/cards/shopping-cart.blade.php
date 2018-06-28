<div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px; margin-top:20px;">
    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Récapitulatif de la commande</p></span> </div> </div>

    <div class="card-body" style="background-color:white; color:#68B42F;">
        <div class="table-responsive">
        <table id="cart_table" class="table table-bordered table-hover ">
            <thead>
            <tr>
                <th class="text-left">Nom du produit</th>
                <th class="text-right hidden-xs">Quantité</th>
                <th class="text-right hidden-xs">Prix unitaire</th>
                <th class="text-right">Total</th>
            </tr>
            </thead>
            <tbody>
            @php
                $subTotal = 0;$totalTax = 0;
            @endphp
            @foreach($cartItems as $cartItem)
                <tr>
                    <td class="text-left">
                        {{ $cartItem->name() }}

                        <br>
                        &nbsp;

                        @if(null !== $cartItem->attributes() && count($cartItem->attributes()))
                        @php
                            $attributeText = "";
                        @endphp
                        @foreach($cartItem->attributes() as $attribute)
                            @if($loop->last)
                                <?php $attributeText .= $attribute['variation_display_text']; ?>
                            @else
                                <?php $attributeText .= $attribute['variation_display_text'] . ": "; ?>
                            @endif
                        @endforeach
                         <p>Attributs: <span
                                class="text-success"><strong>{{ $attributeText}}</strong></span>
                    @endif

                    </td>

                    <td class="text-right hidden-xs">{{ $cartItem->qty() }}</td>
                    <td class="text-right hidden-xs">
                       €{{ $cartItem->priceFormat()  }}</td>
                    <td class="text-right">
                        €{{ $cartItem->finalPrice()  }}</td>
                </tr>

                @php
                    $subTotal = $total = 0;
                    $subTotal += $cartItem->price();
                @endphp
                <input type="hidden" name="products[]" value="{{ $cartItem->slug() }}"/>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="text-right  hidden-xs"><strong>Sous-Total:</strong></td>
                <td class="text-right sub-total" data-sub-total="{{ number_format((float)$subTotal, 2, '.', '') }}">
                    €{{ number_format((float)$subTotal, 2, '.', '') }}</td>
            </tr>
            <tr class="hidden shipping-row">
                <td colspan="3" class="text-right shipping-title  hidden-xs"
                    style="font-weight: bold;">Option de livraison
                </td>
                <td class="text-right shipping-cost" data-shipping-cost="0.00">€</td>
            </tr>

            <tr>
                <td colspan="3" class="text-right  hidden-xs"><strong>Total:</strong></td>
                <td class="text-right total" data-total="{{ number_format((float)$subTotal, 2, '.', '') }}">
                   €{{ number_format((float)Cart::Total(), 2, '.', '') }}</td>
            </tr>
            </tfoot>

        </table>
    </div>
    </div>
</div>
