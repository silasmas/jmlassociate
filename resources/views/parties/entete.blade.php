<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>{{config('app.name') }} | {{isset($titre)?$titre:""}}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.min.css') }}">
  </head>
  <body>
