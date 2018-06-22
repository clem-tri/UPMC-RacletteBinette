@extends('layouts.app')

@php

    $metaTitle = (!is_null($pageModel) && $pageModel->meta_title != "") ? $pageModel->meta_title : "Home Page";
    $metaDescription = (!is_null($pageModel) && $pageModel->meta_description != "") ? $pageModel->meta_description : "Home Page";

@endphp

@section('meta_title',$metaTitle)
@section('meta_description',$metaDescription)

@section('content')
        <div class="row" style="width:100%;">
            <div class="col-md-12 col-centered produitEnUne" style="min-height:450px; width:100%;">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-centered produitSousUne"  style="min-height:450px;">
            </div>
            <div class="col-lg-6 col-centered forumImage"  style="min-height:450px;">
            </div>
        </div>
@endsection
