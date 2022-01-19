<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>WebGamerz</title>
    <style>
        body{
            background: #f1f1f1;
        }
        h1{
            text-align: center;
        }
        /*for preloader animation*/
        #overlay{
            height:100%;
            width:100%;
            background:white;
            position:fixed;
            left:0;
            top:0;
            z-index: 1;
        }
        .spinner{
            width: 200px;
            height: 200px;
            border-top: 5px solid red;
            border-radius: 100%;
            position: absolute;
            top:0;
            bottom:0;
            left:0;
            right: 0;
            margin: auto;
            padding: 24px;
            animation: spin 1s infinite linear;
            -webkit-animation: spin 1s infinite linear;
        }
        .inner-spinner{
            width: 80px;
            height: 80px;
            border-bottom: 2px solid yellow;
            border-radius: 100%;
            position: absolute;
            top:0;
            bottom:0;
            left:0;
            right: 0;
            margin: auto;
            padding: 20px;
            animation: spin 1s infinite linear reverse;
            -webkit-animation: spin 1s infinite linear reverse;
        }
        .image{
            top:0;
            bottom:0;
            left:0;
            right: 0;
            position: absolute;
            margin: auto;
            width: 80px;
            height: 80px;
        }
        @keyframes spin {
            0%{
                transform: rotate(180deg);
            }100%{
                transform: rotate(360deg);
            }
        }
        @-webkit-keyframes spin {
            0%{
                transform: rotate(0deg);
            }100%{
                transform: rotate(360deg);
            }
        }
        /*for preloader animation*/
    </style>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
               
            }, 1500);
        });
    </script>
</head>
<body>
    <div id="overlay">
        <div class="spinner"></div>
        <div class=""></div>
        
  






