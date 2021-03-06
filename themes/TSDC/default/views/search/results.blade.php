@extends('layouts.app')

@section('meta_title')
    {{ "Résultats pour " . $queryParam }}
@endsection

@section('content')
    <div class="row col-md-9">
        <h2> Résultats pour: "{{ $queryParam }}"</h2>

        <div class="col-12">
            @if(count($products) <= 0)
                <p>Aucun produit trouvé</p>
            @else
                <div class="row">
                @foreach($products as $product)
                        <div class="col-4">
                            @include('product.view.product-card',['product' => $product])
                    </div>

                @endforeach
                {!!  $products->links('pagination.bootstrap-4') !!}
                </div>
            @endif
        </div>
    </div>
@endsection
