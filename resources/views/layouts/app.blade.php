<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body id="page-top">

<div id="wrapper">

    {{-- Sidebar --}}
    @include('partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            {{-- Topbar --}}
            @include('partials.topbar')

            {{-- Main Content --}}
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

</div>

@include('partials.scripts')

</body>
</html>