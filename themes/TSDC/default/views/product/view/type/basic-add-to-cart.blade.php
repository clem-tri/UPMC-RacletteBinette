

@if($product->qty >= 0)

<form method="post" action="{{ route('cart.add-to-cart') }}">
    {{ csrf_field() }}
<input type="hidden" name="slug" value="{{ $product->slug }}"/>
<div class="product-stock">En stock</div>
<hr>
<div class="row">
    <div class="form-group col-md-2" style="">
        <label>Quantité</label>
        <input type="number" name="qty" class="form-control" value="1"/>
    </div>
</div>
<div class="clearfix"></div>
<div class="float-left" style="margin-right: 5px;">
    <button type="submit" class="btn btn-primary"
            href="{{ route('cart.add-to-cart', $product->id) }}">
        Ajouter au panier
    </button>
</div>
</form>


@else
    <div class="product-stock text-danger">Produit indisponible</div>
    <hr>
    <div class="row">
        <div class="form-group col-md-2" style="">
            <label>Quantité</label>
            <input type="text" disabled="" name="qty" class="form-control" value="1"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="float-left" style="margin-right: 5px;">
        <button type="button"  disabled class="btn btn-default"
                href="#">
            Ajouter au panier
        </button>
    </div>


@endif
