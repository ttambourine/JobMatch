<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    	@include('layouts.header')
    </head>
    <body>
    	<div class="centre">
    		@include('layouts.navbar')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        	@yield('content')

        	@include('layouts.footer')
        </div>
    </body>
</html>