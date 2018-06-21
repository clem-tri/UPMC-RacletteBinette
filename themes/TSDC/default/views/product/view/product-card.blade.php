<div class="card">
    <div class="card-body">

        <a href="{{ route('product.view', $product->slug)}}" title="{{ $product->name }}">
            @include('product.view.product-image',['product' => $product])
        </a>

        <div class="caption">
            <h3>
                <a href="{{ route('product.view', $product->slug)}}" class="product-name"
                   title="{{ $product->name }}">
                    {{ $product->name }}
                </a>
            </h3>

            <p class="product-price">
                € {{ number_format($product->price,2) }}
            </p>

            <div>

                @if($product->qty >= 0)
                <form method="post" action="{{ route('cart.add-to-cart') }}">
                    {{ csrf_field() }}


                <input type="hidden" name="slug" value="{{ $product->slug }}"/>

                <div class="product-stock">En Stock</div>
                <hr>

                <div class="clearfix"></div>
                <div class="float-left" style="margin-right: 5px;">
                    <button type="submit" class="btn btn-primary"
                            href="{{ route('cart.add-to-cart', $product->id) }}">
                        Ajouter au panier
                    </button>
                </div>
                </form>

                @else
                    <div class="product-stock text-danger ">Out of Stock</div>
                    <hr>

                    <div class="clearfix"></div>
                    <div class="float-left" style="margin-right: 5px;">
                        <button type="button" disabled class="btn btn-default">
                            Ajouter au panier
                        </button>
                    </div>
                @endif

                @if(Auth::check() && Auth::user()->isInWishlist($product->id))
                    <a class="btn btn-danger" title="Enlevez de ma liste de souhait"
                       data-toggle="tooltip" href="{{ route('my-account.wishlist.remove', $product->slug) }}">
                        <i
                                class="fa fa-heart"></i></a>
                @else
                    <a class="btn btn-success" title="Ajouter à ma liste de souhait" data-toggle="tooltip"
                       href="{{ route('my-account.wishlist.add', $product->slug) }}"><i class="fa fa-heart"></i></a>
                @endif
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endpush