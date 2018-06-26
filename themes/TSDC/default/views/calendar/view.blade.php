@extends('layouts.app')

@section('meta_title','Calendrier d\'utilisation')
@section('meta_description','Calendrier d\'utilisation')

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang-all.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection


@section('content')
    <div class="row">
            <h1>Calendrier d'utilisation global</h1>
    </div>
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
@endsection