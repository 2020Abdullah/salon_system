<!DOCTYPE html>
<html lang="en">
<head>
       @include('employer.layouts.head')

</head>
<body class="rtl">
	<!-- dashboard structure
	===========================================-->
    <div class="bmd-layout-canvas">
    <div class="bmd-layout-container bmd-drawer-f-l avam-container bmd-drawer-in animated ">
    @include('employer.layouts.header')
    @include('employer.layouts.sidebar')
    <div class="bmd-layout-content">
        <div class="container-fluid ">
           @yield('content')
        </div>
    </div>
</div>
    </div>
	<!-- Links of js Files
	===========================================-->

    @include('employer.layouts.scripts')
</body>
</html>
