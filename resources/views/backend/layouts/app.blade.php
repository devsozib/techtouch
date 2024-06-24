<!DOCTYPE html>
<html lang="en">
    @include('backend.layouts.head')
    <body>
        <div class="page-container">
            @include('backend.layouts.header')
            @include('backend.layouts.sidebar')
            @yield('content')
        </div>
        @include('backend.layouts.script')   
        @yield('js')          
    </body>
</html>