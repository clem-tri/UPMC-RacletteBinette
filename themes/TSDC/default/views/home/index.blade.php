@extends('layouts.app')

@php

    $metaTitle = (!is_null($pageModel) && $pageModel->meta_title != "") ? $pageModel->meta_title : "Home Page";
    $metaDescription = (!is_null($pageModel) && $pageModel->meta_description != "") ? $pageModel->meta_description : "Home Page";

@endphp

@section('meta_title',$metaTitle)
@section('meta_description',$metaDescription)

@section('content')

    <p style="margin-left:35px; font-size:9pt; font-family:'Comfortaa';">Vous êtes dans : <a href="index.php" title="Accueil">Accueil</a></p>
        <br/>
        <div class="row" style="width:100%;">
            <div class="col-md-11 col-centered produitEnUne col-md-offset-1" style="background-size:cover; min-height:400px; width:100%;">
                <nav aria-label="navigation">
                    <ul class="pager" style="position:absolute; bottom:0; padding-bottom:150px; padding-right:50px; right:0;">
                        <li><a href="#" title="Suivant">Découvrir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
            <br/> <br/>


        <div class="row" style="width:100%;">
            <div class="col-md-7 col-centered produitSousUne col-md-offset-2"  style="min-height:450px; width:100%;">
                <h2 style="font-family:'Big John' !important; color:white; text-align:center; font-size:20pt; padding-top:170px;">Sentez la nature vous effleurer</h2>
                <h3 style="font-family:'Slim Joe' !important; color:white; text-align:center; font-size:16pt; ">Plante d'exterieur</h3>
                <nav aria-label="navigation">
                    <ul class="pager" style="position:absolute; bottom:0; padding-bottom:150px; padding-right:50px; right:0;">
                        <li><a href="#" title="Suivant">Découvrir</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-centered forumImage col-md-offset-1"  style="background-size:cover; min-height:450px; width:100%;">
                <h2 style="font-family:'Big John' !important; color:white; text-align:center; font-size:20pt; padding-top:310px;">Visitez notre forum</h2>
                <nav aria-label="navigation">
                    <ul class="pager" style="position:relative; bottom:0; margin-right:auto; margin-left:auto;">
                        <li><a href="#" title="Suivant">Visiter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
            <br/>  <br/>  <br/>

        <div class="row" style="width:100%;">
            <div class="col-md-3 col-centered produit1 col-md-offset-1"  style="max-width : 100%;min-height: 300px; display: block;">
                <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">54,35e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">HERELUDIT BALCON</h3>
                </div>
                <nav aria-label="navigation">
                    <ul class="pager" style="position:absolute; bottom:0; right:0; padding-right:20px; padding-bottom:20px;">
                        <li><a href="#" title="Voir">Voir le produit</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-centered produit2 col-md-offset-1"  style="max-width : 100%;min-height: 300px; display: block;">
                <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">20e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">BROUETTE JARDINAGE</h3>
                </div>
                <nav aria-label="navigation">
                    <ul class="pager" style="position:absolute; bottom:0; right:0; padding-right:20px; padding-bottom:20px;">
                        <li><a href="#" title="Voir">Voir le produit</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-centered produit3 col-md-offset-1"  style="max-width : 100%;min-height: 300px; display: block;">
                <div class="circle"><h3 style="font-size:15pt; font-family: 'Big John'; padding-top:20px;">128,99e</h3><h3 style="font-size:7pt; font-family: 'Slim Joe';">TONDEUSE CLUB CADET</h3>
                </div>
                <nav aria-label="navigation">
                    <ul class="pager" style="position:absolute; bottom:0; right:0; padding-right:20px; padding-bottom:20px;">
                        <li><a href="#" title="Voir">Voir le produit</a></li>
                    </ul>
                </nav>
            </div>
        </div>
@endsection
