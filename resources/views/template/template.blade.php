<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template |@yield('title',' Template')</title>
    @include('template.parts.stayle')
</head>

<body>

    @include('template.parts.nav')

    <!-- ///////////////////// -->

    @include('template.parts.home')

    <!-- /////////////////////////////// -->

    @include('template.parts.servecis')

    <!-- /////////////////////////////////// -->

    @include('template.parts.portfolio')

    <!-- ////////////////////////////////////// -->

    @include('template.parts.abute')

    <!-- ///////////////////////////////////// -->

    @include('template.parts.people')

    <!-- ////////////////////////////////// -->

    @include('template.parts.logos')

    <!-- /////////////////////////////////////// -->

    @include('template.parts.start')

    <!-- /////////////////////////////////////// -->

    @yield('latest')

    <!-- /////////////////////////////////////// -->

    @include('template.parts.subscrip')

    <!-- /////////////////////////////////////// -->

    @include('template.parts.footer')
     <!-- /////////////////////////////////////// -->

    @include('template.parts.script')


</body>

</html>
