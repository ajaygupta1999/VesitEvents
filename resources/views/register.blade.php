<!DOCTYPE html>
<html>
<head>
    <title>VESIT EVENTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
    <link rel="stylesheet" type="text/css" href="http://localhost:800/myevent/resources/css/main-page.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

<form class="submit-forms" action="http://localhost:800/myevent/public/register/check" method="POST">
    @csrf
    <input type="text" name="email">Email</input>
    <br>
    <input type="password" name="password">Password</input>
    <button type="submit" class="btn btn-primary btn-md btn-block">Login</button>
</form>

