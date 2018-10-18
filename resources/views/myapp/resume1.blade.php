@extends('layouts.theme')
@section('main-body')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ url('/store') }}" method="post">
        <div class="text-primary">
        <center> <b> <h1>Resume</h1></b></center>
                    <hr>
        </div>
              <label for="id"><b>Student ID    </b></label>
              <input type="number" class="form-control bg-secondary" placeholder="Enter ID" name="id" required><br>


              <label for="name"><b>Name    </b></label>
              <input type="text" class="form-control bg-secondary" placeholder="Enter Name" name="name" required><br>

              <label for="email"><b>E-mail  </b></label>
              <input type="email" class="form-control bg-secondary" placeholder="Enter email" name="email" required><br>

              <label for="address"><b>Address </b></label>
              <input type="text" class="form-control bg-secondary" placeholder="Enter Address" name="address" required><br>

              <label for="qualification"><b>Qualification</b></label>
              <input type="text" class="form-control bg-secondary" placeholder="Repeat Qualification" name="qualification" required><br>


              <label for="gender" ><b>Gender</b></label><br>
              <div class="form-control">
              <input type="radio" value="Male" name="gender">Male<br>
              <input type="radio" value="female" name="gender">female<br>
              <input type="radio" value="other" name="gender">other<br>
              </div>


              <label for="age"><b>age</b></label>
              <input type="text" placeholder="Enter Age" name="age" class="form-control bg-secondary" required><br>

              <label for="branch"><b>Branch</b></label>
              <select class="form-control" name="branch">
                  <option value="0"></option>
                          <option value="Computer">Computer</option>
                          <option value="Civil">Civil</option>
                          <option value="Mechanical">Mechanical</option>
                          <option value="Electrical">Electrical</option>
                          <option value="Electronic">Electronic</option>
                </select>


              <label for="year"><b>Year</b></label>
              <select class="form-control" name="year">
                  <option value="0"></option>
                          <option value="First">First</option>
                          <option value="Second">Second</option>
                          <option value="Third">Third</option>
                          <option value="Final">Final</option>

                </select>      <br>
              <label for="lang"><b>known computer language</b></label>
              <div class="form-control">
              <input type="checkbox" value="python"class="form-control">python
              <input type="checkbox" value="java" class="form-control">java
              <input type="checkbox" value="c" class="form-control">c
              <input type="checkbox" value="php" class="form-control">php
              </div>



              @csrf

              <hr>


              <button type="submit" class="btn btn-secondary">Save</button>
              <button type="button" class="btn btn-secondary">Exit</button>
              <button type="button" class="btn btn-secondary">Back</button>

            </div>


      </form>

    </div>
    <div class="col-md-4">
      <img src="images/gif/reg.jpeg" width=100% height=100%>
    </div>
  </div>
</div>

</body>
</html>
@endsection
