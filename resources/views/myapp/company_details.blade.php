@extends('layouts.theme')
@section('main-body')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company Details...</title>
    <style>
    label{
      font-weight : bold;
      font-family: "Times New Roman",Times,serif;
    }
    </style>
  </head>
  <div class="row">
  <div class="col-md-8">

  <body>
    <form action="{{ url('/store1') }}" method="post">
    <div class="text-primary">
      <center> <h1>Company Name </center></h1>
    </div>
    <label> Company Name </label>
    <input type='text' name="cname" class="form-control bg-secondary"</input>

      <label>Contact Person Name</label>
      <input type='text' name="cpname"  class="form-control bg-secondary"</input>
      <label>Contact Number</label>
      <input type='number' name="cpnumber" class="form-control bg-secondary"</input>
      <label>address</label>
      <input type='text' name="address" class="form-control bg-secondary"</input>
      <label>city</label>
      <input type='text' name="city" class="form-control bg-secondary"</input>
      <label>state</label>
      <input type='text' name="state" class="form-control bg-secondary"</input>
      <label>Postal Code</label>
      <input type='number' name="pcode" class="form-control bg-secondary"</input>
      <label>Country</label>
      <input type='text' name="country" class="form-control bg-secondary"</input>
      <label>Fax Number</label>
      <input type='number' name="fnumber" class="form-control bg-secondary"</input>
      <label>Web Side</label>
      <input type='text' name="wside" class="form-control bg-secondary"</input>
              <button type="submit" class="btn btn-secondary">Save</button>
              <button type="button" class="btn btn-secondary">Exit</button>
              <button type="button" class="btn btn-secondary">Back</button>
  </div>
    <div class="col-md-4">
      @csrf

    <img src="{{ asset('images/gif/company.jpeg') }}" width=100% height=100%></img>
    </div>
  </div>
   </body>
</html>
