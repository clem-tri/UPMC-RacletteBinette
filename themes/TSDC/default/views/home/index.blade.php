@extends('layouts.app')

@php

    $metaTitle = (!is_null($pageModel) && $pageModel->meta_title != "") ? $pageModel->meta_title : "Chez Raclette & Binette";
    $metaDescription = (!is_null($pageModel) && $pageModel->meta_description != "") ? $pageModel->meta_description : "Chez Raclette & Binette";

@endphp

@section('meta_title',$metaTitle)
@section('meta_description',$metaDescription)

@section('content')

    {{--<p style="margin-left:35px; font-size:9pt; font-family:'Comfortaa';">Vous êtes dans : <a href="index.php" title="Accueil">Accueil</a></p>--}}

    <br/>
    <div class="row" style="width:100%;">
        <div class="col-md-11 col-centered produitEnUne col-md-offset-1" style="background-size:cover; min-height:400px;">
            <div class="circle" style="padding-top:35px; margin-left:230px; margin-top:70px; border-radius:140px; width:280px; height:280px; float:left; background-color:white;"><h3 style="font-size:40pt; color:#E41F21; font-family: 'Big John'; padding-top:20px;">129e</h3><h3 style="color:black; font-size:14pt; font-family: 'Slim Joe';">Tondeuse a gazon McCulloch</h3><h3 style="color:black; font-size:7pt; font-family: 'Arial';"><i>Offre valable jusqu'au 3 juillet</i></h3>
            </div>
            <nav aria-label="navigation">
                <div class="pager" style="position:absolute; bottom:0; padding-bottom:150px; padding-right:50px; right:0;">
                    <a class="btn btn-primary" style="background-color:#68B42F; border-color:white;" href="{{route("product.view", array('slug' => "tondeuse-a-gazon-mcculloch"))}}" role="button">Découvrir</a>
                </div>
            </nav>
        </div>
    </div>
    <br/> <br/>


    <div class="row" style="width:100%;">
        <div class="col-md-7 col-centered produitSousUne col-md-offset-1"  style="min-height:450px;">
            <h2 style="font-family:'Big John' !important; color:white; text-align:center; font-size:20pt; padding-top:170px;">Sentez la nature vous effleurer</h2>
            <h3 style="font-family:'Slim Joe' !important; color:white; text-align:center; font-size:16pt; ">Plante d'exterieur</h3>
            <nav aria-label="navigation">
                <div class="pager" style="position:absolute; bottom:0; padding-bottom:150px; padding-right:50px; right:0;">
                    <a class="btn btn-primary" style="background-color:#68B42F; border-color:white;" href="{{route('category.view', array('slug' => 'plantes-exterieurs'))}}" role="button">Découvrir</a>
                </div>
            </nav>
        </div>
        <div class="col-md-3 col-centered forumImage"  style="background-size:cover; min-height:450px;">
            <h2 style="font-family:'Big John' !important; color:white; text-align:center; font-size:20pt; padding-top:250px;">Visitez notre forum</h2>
            <nav aria-label="navigation">
                <div class="pager" style="position:relative; bottom:0; padding-top:50px;">
                    <a class="btn btn-primary" style="background-color:white; font-weight:bold; color:#68B42F; border-color:white; position:relative; display:block; width:100px; margin-right:auto; margin-left:auto;" href="{{route('chatter.home')}}" role="button">Visiter</a>
                </div>
            </nav>
        </div>
    </div>
    <br/>  <br/>  <br/>

    <div class="row" style="width:100%;">
        <div class="col-md-3 col-centered produit1 col-md-offset-1"  style="max-width : 100%;min-height: 250px; display: block;">
            <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">54,35e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">HERELUDIT BALCON</h3>
            </div>
            <nav aria-label="navigation">
                <div class="pager" style="position:absolute; bottom:0; padding-bottom:10px; padding-right:50px; right:0;">
                    <a class="btn btn-primary" style="background-color:#68B42F; border-color:white;" href="{{ route("product.view", array('slug' => "hereludit-balcon")) }}" role="button">Voir le produit</a>
                </div>
            </nav>
        </div>
        <div class="col-md-3 col-centered produit2 col-md-offset-1"  style="max-width : 100%;min-height: 250px; display: block;">
            <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">20e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">BROUETTE JARDINAGE</h3>
            </div>
            <nav aria-label="navigation">
                <div class="pager" style="position:absolute; bottom:0; padding-bottom:10px; padding-right:50px; right:0;">
                    <a class="btn btn-primary" style="background-color:#68B42F; border-color:white;" href="{{route("product.view", array('slug' => "brouette-jardinage")) }}" role="button">Voir le produit</a>
                </div>
            </nav>
        </div>
        <div class="col-md-3 col-centered produit3 col-md-offset-1"  style="max-width:100%; min-height: 250px; display: block;">
            <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">128,99e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">TONDEUSE CLUB CADET</h3>
            </div>
            <nav aria-label="navigation">
                <div class="pager" style="position:absolute; bottom:0; padding-bottom:10px; padding-right:50px; right:0;">
                    <a class="btn btn-primary" style="background-color:#68B42F; border-color:white;" href="{{route("product.view", array('slug' => "tondeuse-cub-cadet")) }}" role="button">Voir le produit</a>
                </div>
            </nav>
        </div>
    </div>



    {{--<div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-12" style="min-height: 450px">

                @if($pageModel !== null)
                    {!! $pageModel->content !!}
                @else
                    <div class="h1">AvoRed E commerce</div>
                    <h6>Home Page</h6>
                @endif
            </div>
        </div>
    </div>--}}
@endsection
