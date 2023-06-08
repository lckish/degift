@extends('client.layouts.main')

@section('content')
    <body class="shoe">

        <!-- ==========Preloader========== -->
        <div class="loader"><span>Degift...</span></div>
        <!-- ==========Preloader========== -->
        <!--===scroll bottom to top===-->
        <a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
        <!--===scroll bottom to top===-->
        @vite('resources/js/app.js')
        <div id="app"></div>
    </body>
@endsection
