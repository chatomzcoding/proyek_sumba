<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
         body {
            font-size: 12px;
            font-family:"Calibri, sans-serif";
            padding: 0px;
            margin: 0px;
        }
        section{
            margin: 5px 10px 0px 10px;
        }
        header{
            margin: 0px 10px 0px 10px;
        }
        footer{
            margin: 10px 40px 20px 40px;
        }
        main{
            margin: 10px 40px 20px 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            color: #232323;
            /* padding: 9px 10px; */
        }
        .table1 , .tr1 , .td1{
            border: 1px solid #999;
            /* padding: 3px 10px; */
        }
        .tr1 > th{
            border: 1px solid #999;
            padding: 3px 10px;
        }
        .tr1 > td{
            border: 1px solid #999;
            padding: 3px 10px;
        }

        /* css ukuran */
        .w25{
            width: 25%;
        }
        .w50{
            width: 50%;
        }
        .w75{
            width: 75%;
        }
        .w100{
            width: 100%;
        }

        .fw-bold {
            font-weight: bold;
        }

        /* css for teks */
        .fs18 {
            font-size: 18px;
            /* font-weight: ; */
        }
        .fs14 {
            font-size: 14px;
            /* font-weight: ; */
        }
        .fs12 {
            font-size: 12px;
            /* font-weight: ; */
        }
        .text-end{
            text-align: right;
        }
        .text-left{
            text-align: left;
        }
        .text-start{
            text-align: left;
        }
        .text-center{
            text-align: center;
        }
        .text-justify{
            text-align: justify;
        }
        .text-uppercase{
            text-transform: uppercase;
        }

        .text-capitalize{
            text-transform: capitalize;
        }
        .small{
            font-size: 0.9em;
        }
        .box{
            border: 1px solid black;
            padding: 2px;
            text-align: center;
            background-color: #ddd;
        }

        .kaki {
            width: 100%;
            border-top: 1px solid black;
            font-size: 10px;
            /* font-style: italic; */
            text-align: right;
        }
        .bar {
            border-bottom: 1px solid black;
        }
        /* MARGIN AND PADDING */
        .mt-1 {
            margin-top: 10px;
        }
        .mt-2 {
            margin-top: 20px;
        }
        /* WARNA */
        .bg-secondary {
            background-color: #eee;
        }
        /* CUSTOM */
        .ttd-border {
            border-top-style: solid;
            padding: 5px;
        }
        .img-cap {
            width: 110px;
        }
    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>