@extends('layouts.theme')
@section('main-body')
<!DOCTYPE html>
<html>
<head>
	<title>Student Section....</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	button{
		display: block;
		text-decoration: none;
		font-size: 20px;
		padding: 20px 10px;
		margin: 10px;
		background-color: #4CAF50;
		color: white;
		width: 800px;
		border-radius: 20px;
		border:1px solid green;

	}
	a:link{
		text-decoration: none;
	}
	button:hover{
		background-color: #4CAF70;

	}
	img{
		border:2px solid gray;
	}
	h1{
		width: 100%;
		text-align:center;
	color:blockquote;;
	f
	}
	</style>
</head>
<body>
	<h1 class="font-italic">Wel-come</h1>
	<div class="btn">
		<a href="{{URL::to('/stud')}}"><button type="button" name="registerstudent" >Register Student</button></a>
		<a href="{{URL::to('/view')}}"><button type="button" name="view">View Deatails</button></a>
		<a href="{{URL::to('/update')}}"><button type="button" name="Update">Update Details</button></a>
		<a href="{{URL::to('/c_details')}}"><button type="button" name="companydetail">Company Detail</button></a>
		<a href="{{URL::to('/change_pass')}}"><button type="button" name="changepassword">Change Password </button></a>
 </div>
 <div class="side">
	 <img src="" width="100%" height="100%">
@csrf
</body>
</html>
@endsection
