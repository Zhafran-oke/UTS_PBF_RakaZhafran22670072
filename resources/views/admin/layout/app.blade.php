<!doctype html>
<html lang="en">
@include('admin.layout.head')

<body data-topbar="dark">
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @yield('content')
    @include('admin.layout.script')
</body>

</html>