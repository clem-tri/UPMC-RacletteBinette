<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', $metaTitle)</title>
    <meta name="description" content="@yield('meta_description', $metaDescription )"/>


    <link href="{{ asset('vendor/tsdc-default/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/tsdc-default/css/style.css') }}" rel="stylesheet">
    @stack('styles')
    @yield('css')
    @if(Request::is( Config::get('chatter.routes.home') ) || Request::is( Config::get('chatter.routes.home') . '/*' ))
    <!-- LINK TO YOUR CUSTOM STYLESHEET -->
      <link rel="stylesheet" href="{{ asset('vendor/tsdc-default/css/forums.css') }}" />
    @endif
        <!-- Scripts -->
    <script>
        window.Laravel = <?php
        echo json_encode([
                'csrfToken' => csrf_token(),
        ]);
        ?>
    </script>

</head>
<body>
<script src="{{ asset('/vendor/tsdc-default/js/app.js') }}"></script>
@include("layouts.nav")
<div class="top-buffer  bottom-buffer">

    <div class="row">
        <div class="col-12">

            @if(session()->has('errorNotificationText'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>

                    <strong>Error!</strong> {{ session()->get('errorNotificationText') }}

                </div>
            @endif

            @if(session()->has('notificationText'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>

                    <strong>Success!</strong> {{ session()->get('notificationText') }}

                </div>
            @endif
        </div>
    </div>

    @yield('content')
</div>

@include('layouts.footer')
@stack('scripts')
@yield('js')
</body>
</html>
