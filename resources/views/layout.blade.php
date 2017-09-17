<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    	@include('layouts.header')
    </head>
    <body>
    	<div class="centre">
    		@include('layouts.navbar')

        	@yield('content')

        	@include('layouts.footer')
        </div>
    </body>
</html>