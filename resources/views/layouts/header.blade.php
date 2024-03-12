<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <form action="file.php" method='post' class="Registration_page">
        <div class="reg">
            <h1>Creat Account</h1>
            <div class="textbox">
                <input type="text" placeholder="First Name" name="fname" value="">
            </div>
            <div class="textbox">
                <input type="text" placeholder="Last Name" name="lname" value="">
            </div>
            <div class="textbox">
                <input type="text" placeholder="Your E_mail" name="email" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="button" type="submit" name="submit" value="submit">
        </div>
    </form>

</body>

</html>








<!-- resources/views/child.blade.php -->
<!-- 
@extends('layouts.app')

@section('resources/views/layouts', 'header.blade')

@section('header')
@parent

<p>Registration</p>
@endsection

@section('content')
<p>This is my body content.</p>
@endsection-->
