@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Travelling Booking Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body{
    background-image: url("images/famous.jpg");
    background-size: cover;
}
.container .form-group .text-center
{
   font-size:36px;
   font-weight:500;
   color:red;
}
#form{
    background-color: #000;
    height:500px;
    width:700px;
    margin:auto;
    padding:20px;
    opacity: 0.7;
}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #input-group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input3 #input-group{
    margin-left: 50px;
}
#input4 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
</style>
</head>
<body>
    <div class="container">

        <form class="form-group">
            <h1 class="text-center">Travelling Booking Form</h1>

            <div id="form">
                <h3 class="text-white">Travelling Booking Related Details</h3>

            <div id="input">
                <input type="text" id="input-group" placeholder="From">
                <input type="text" id="input-group" placeholder="To">
                <input type="text" id="input-group" placeholder="Departure Date">
                <input type="text" id="input-group" placeholder="Departure Time">
                <select  id="input-group" style="background: black;">
                    <option value="">Preffered Travelling Mode</option>
                    <option value="">IndoGo</option>
                    <option value="">AirIndia</option>
                    <option value="">SpaceJet</option>
                </select>
                <select  id="input-group" style="background: black;">
                    <option value="">Preffered Seating</option>
                    <option value="">Economy Class</option>
                    <option value="">Business Class</option>
                    <option value="">First Class</option>
                </select>
                </div>

                <div id="input2">
                    <input type="number" id="input-group" placeholder="Adult">
                    <input type="number" id="input-group" placeholder="Children(2-11years)">
                    <input type="number" id="input-group" placeholder="infant(under 2years)">
                </div>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span> 
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">One Way</label>
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">Round Trip</label>
                </div>

                <div id="input4">
                    <input type="text" id="input-group" placeholder="Return Date">
                    <input type="text" id="input-group" placeholder="Return time">
                    <input type="text" id="input-group1" placeholder="Any Message">
                </div>

                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>

                <div id="input6">
                    <input type="text" id="input-group" placeholder="Full Name">
                    <input type="number" id="input-group" placeholder="Phone Number">
                </div>
                <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>

        </form>

    </div>
</body>
</html>
       
@endsection