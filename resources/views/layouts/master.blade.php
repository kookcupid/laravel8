<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>  

    @include('layouts.menu')




    @yield('content')

   

    @include('layouts.pagescript')

    @yield('page-script')

</body>

</html>