@extends('layouts.app')

@php

    $metaTitle = (!is_null($pageModel) && $pageModel->meta_title != "") ? $pageModel->meta_title : "Home Page";
    $metaDescription = (!is_null($pageModel) && $pageModel->meta_description != "") ? $pageModel->meta_description : "Home Page";

@endphp

@section('meta_title',$metaTitle)
@section('meta_description',$metaDescription)

@section('content')
        <div class="row" style="width:100%;">
            <div class="col-md-11 col-centered produitEnUne col-md-offset-1" style="min-height:450px; width:100%;">
            </div>
        </div>


        <div class="row" style="width:100%;">
            <div class="col-md-6 col-centered produitSousUne col-md-offset-2"  style="min-height:450px; width:100%;">
                <h2 style="font-family:'Big John' !important; color:white; text-align:center; font-size:20pt; padding-top:170px;">Sentez la nature vous effleurer</h2>
                <h3 style="font-family:'Slim Joe' !important; color:white; text-align:center; font-size:16pt; ">Plante d'exterieur</h3>
            </div>
            <div class="col-md-4 col-centered forumImage col-md-offset-1"  style="min-height:450px; width:100%;">
            </div>
        </div>

        <div class="row" style="width:100%;">
            <div class="col-md-3 col-centered produit1 col-md-offset-1"  style="max-width : 100%;min-height: 200px; display: block;">
            </div>
            <div class="col-md-3 col-centered produit2 col-md-offset-1"  style="max-width : 100%;min-height: 200px; display: block;">
            </div>
            <div class="col-md-3 col-centered produit3 col-md-offset-1"  style="max-width : 100%;min-height: 200px; display: block;">
            </div>
        </div>
@endsection
