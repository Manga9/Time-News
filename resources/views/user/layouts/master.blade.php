<!DOCTYPE html>
<html lang="en">
    @include('user/layouts/head')
    <body>
        @include('user/layouts/header')
        @include('user/layouts/navbar')

        @section('content')
        @show

        @include('user/layouts/footer')
        @include('user/layouts/scripts')
    </body>
</html>
