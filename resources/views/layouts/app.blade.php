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

{{-- 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    @include('modals.userModal')
    @include('modals.programModal')
    @include('modals.toolModal')
    @include('modals.schoolModal')
    @include('modals.usertypeModal') --}}
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
