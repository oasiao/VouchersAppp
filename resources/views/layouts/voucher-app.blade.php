<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-primary bg-dark">
    <div class="container-fluid">
        <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('vouchers.index') }}" class="nav-link" style="color:white;">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('myVouchers.index') }}" class="nav-link" style="color:white;">My profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<div class="footer-pages bg-footer">
    <div class="row">
        <div class="col-12 p-2 d-grid justify-content-center align-items-center">
            <footer>
                <p class="fs-6">
                    © KIM ASIAO | ALL RIGHTS RESERVED
                </p>
            </footer>
        </div>
    </div>
</div>
</body>
<script src="/js/api-vouchers.js"></script>
<script src="/js/api-voucher-user.js"></script>
</html>
