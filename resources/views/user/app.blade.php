<!DOCTYPE HTML>
<html>
<head>
    @include('user.layouts.head')
</head>
<body>
    @include('user.layouts.header')
<div class="banner">
    <div class="container"> 
            <h2>Melihat Senyuman Mu Dek Membuat Ku Lemes</h2>
            <p>&#10084; Mantap Jiwah Dek</p>
            {{-- <a href="singlepage.html">READ MORE</a> --}}
    </div>
</div>
<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
</div>
    <!-- technology-left -->
    <div class="technology">
        <div class="container">
            @yield('main-content')
            
            @include('user.layouts.sidebar')
        </div>
    </div>


    @include('user.layouts.footer')
</body>
</html>