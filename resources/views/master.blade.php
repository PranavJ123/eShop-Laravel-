<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e Comm project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
   @include('header')
    @yield('content')
    @include('footer')
</body>
<style>
    .custom-login{
        height:600px;
        padding-top:100px;
    }
    img.slider-img{
        height:400px !important
    }
    .custom-product{
        height:650px;
    }
    h3.name{
        color:black;
    }
    p.description{
        color:black;
    }
    .trending-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin:20px;
    }
    .detail-img{
        height:200px;
    }
    .custom-detail{
        height:400px;
    }
    .search-box{
        width:500px !important
    }
    .cart-list-divider{
        border-bottom:1px solid black;
        margin-bottom:20px;
        padding-bottom:20px;
    }
    .textarea{
        width:600px;
        height:100px;
    }
    .panel-body{
        color:white;
        text-align:center;
        font-weight:bold;
        background-color:black;
    }
</style>
</html>