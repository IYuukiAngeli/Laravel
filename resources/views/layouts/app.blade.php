<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.header')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')  
        <div class="container-fluid">
            @include('layouts.sidebar')
            <div class="row">
                <main class="col-sm-12 ml-sm-auto col-md-8 pt-3" role="main">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->


    @include('modals.userModal')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
