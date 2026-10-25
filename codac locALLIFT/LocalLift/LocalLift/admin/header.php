<?php
session_start();
include("../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>LocalLift Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    background:#f4f6f9;
    font-family:'Segoe UI',sans-serif;
}

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:250px;
    height:100vh;
    background:#212529;
    color:white;
    overflow:auto;
}

.sidebar h3{
    padding:20px;
    text-align:center;
    border-bottom:1px solid #444;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:14px 20px;
}

.sidebar a:hover{
    background:#198754;
}

.main{
    margin-left:250px;
}

.topbar{
    background:white;
    padding:15px 30px;
    box-shadow:0 2px 5px rgba(0,0,0,.1);
}

.content{
    padding:25px;
}

.card-box{
    border-radius:10px;
    color:white;
    padding:20px;
    margin-bottom:20px;
}

</style>

</head>

<body></body>