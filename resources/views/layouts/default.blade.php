<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.navbar')
<main role="main" style="margin-top: 100px;">
    <div class="col" style="margin-bottom: 15px;display: none">
        <h2>{{$page_header}}</h2>
        <div class="border-bottom"></div>
    </div>

    <div id="breadcrumb" class="breadcrumb-area bg-img" style="background-image: url(img/index5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{$page_header}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{$page_parent_path}}">{{$page_parent}}</a></li>
                                <li class="breadcrumb-item active breadcrumb-item-active" aria-current="page">{{$page_path}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-page">
        @yield('content')
    </div>
</main>
@include('includes.footer')
<script>new WOW().init();</script>
@yield('end_script')
</body>
</html>
