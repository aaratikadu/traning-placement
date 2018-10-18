@extends('layouts.theme')
@section('main-body')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change your Password</title>
    <style>
    label{
      font-weight : bold;
      font-family: "Times New Roman",Times,serif;
    }
    </style>

  </head>

  <body>

    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1 class="text-primary"><center>Change Password</center></h1>
    <label>Enter Your Old password</label>
    <input type="password" class="form-control bg-secondary"  >
    <label> Enter New Password</label>
      <input type="password" class="form-control bg-secondary"  >
      <label>Cofirm New Password</label>
      <input type="password" class="form-control bg-secondary"  >
    <center>  <button type='submit'class="bg-primary" height=70px  width=140x>Change </button></center>
    </div>
  </div>
  </body>
</html>
