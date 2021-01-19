
@extends('master')

@section('content')
<html>
<head>
<style>
body {
font-family: vernada;
  margin: 0;
}
         
.menu{
	background: black;
	padding: 10px;
    border-radius: 5px;
    height: 70px;
    width: 100%;
}
.menu button,.menu div{
  float: left;
  border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 120%;
  margin-left: 10%;
}

.menu a{
	color: white;
    text-decoration: none;
    
}
.topnav {
  height: 50px;
  margin-top: 10px;
  margin-left: 10px;
  overflow: hidden;
  background-color: white;
}


/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 800px;
  font-size: 17px;
  position: relative;
  }

.topnav p  {
  color: blue;
  text-transform: uppercase;
  position: relative;

  }
 
.topnav img{
  width: 150px;
  position: relative;
  margin-left: -200px;
  right:  600px;
  bottom: 50px;
  left: 350px;
} 
/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

.types{ 
  margin-top: 10px;
	background: #e6e6e6;
	border: 5px ;
	position: relative;
  text-align: center;
}

.types button{  
  color: black;
  background: none;
  text-align: center;
  padding-left:80px; 
  font-size: 20px;
  border: none;
  position: relative;

 }

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;

}
.container h2{
	margin-left: 50px;
}
/* Hide the images by default */
.mySlides {
  display: none;
  float: left;
  margin-left: 50px;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}



.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 5%;
  margin-left: 30px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.center{
	display: block;
}
.info{
	margin-left: 760px;
	margin-right: 40px;
}

.details button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
.details{
	background-color: blue;
	border-radius: 5px;
	margin-left: 30px;
	margin-right: 30px;
}

.description{
	margin-left: 75px;
}
.column1{
	float: left;

}
.column2{
	margin-left: 1000px;
	width: 400px;
}
.row1:after{
	content: "";
	display: table;
	clear: both;
}
.column2 button{
	background-color: white;
	border: none;
	width: 400px;
}
.desInfo{
	word-wrap:break-word;
	width: 900px;
}

.table{
	border-collapse: collapse;
	width: 100%;

}
td,th{
	border-radius: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

tr:nth-child(odd){
	background-color: #dddddd;
}
.addInfo{
	margin-left: 75px;
}
.addInfo hr{
	margin-right: 30px;
}
.rev{
	margin-left: 75px;
}
.rev button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 30px;
}
.sign{
float: left;
padding-left: 70px;
padding-right: 20px;
}
.log{
  float: left;
}

.Techrev{
	margin-left: 75px;
}
.Techrev button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 30px;
}
.bh{
  font-size: 25px;
  color: black;
}
.wh{
  font-size: 25px;
  background-color: #ffffff;
	color: black;
}
  
 .fotter{
	background: black;
	padding: 50px;
    border-radius: 5px;
    position: relative;
    bottom: 250px;
}
 
 .fotter button{
 	border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 16px;
  margin: 4px 120px;
 }

 .fotter img{
 	height: 50px;
 	border: none;
 	background: none;
 }
 
</style>
</head>
<body>


<div class="row">
<blockquote class="menu">
    	<button type="button" id="home"><a href="/">Home</a></button>
        <button type="button" id="laptops"><a href="laptops">laptops</a></button>
        <button type="button" id="news">news</button>
        <button type="button" id="info"><a href="info">info</a></button>
        @if (Route::has('login'))
                
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                       <div> <x-jet-dropdown-link href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </x-jet-dropdown-link>
                                       </div>
                                    </form>
                    @else
                    <button type="button" id="info">   <a href="{{ route('login') }}" class="login">Login</a> </button>

                        @if (Route::has('register'))
                        <button type="button" id="info">    <a href="{{ route('register') }}" class="reg">Register</a> </button>
                        @endif
                    @endif
                
            @endif
    </blockquote>

    

    <blockquote class="types">
      <button type="button">deal</button>
        <button type="button">hp</button>
        <button type="button">hawawi</button>
        <button type="button">asus</button>
        <button type="button">samsung</button>
        <button type="button">microsoft</button>
         <button style="color: blue;" type="button" id="More">More</button>
    </blockquote>

    <div class="topnav">
      <form method="GET" action="{{route('searchyy')}}" role="searchyy">
@csrf
<input type="text" placeholder="Search.." name="searchyy">
<!-- <button type="sumbit" id="btn"></button> -->
</form>

    </div>

    @foreach($product as $prod) 

<div class="container">
	<h2>{{$prod['brand']}} {{$prod['model']}}</h2>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image1']?> alt="W3Schools.com">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image2']?> alt="W3Schools.com">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image3']?> alt="W3Schools.com">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image4']?> alt="W3Schools.com">
  </div>
    


  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="column">
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image1']?> style="width:50%" onclick="currentSlide(1)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image2']?> style="width:50%" onclick="currentSlide(2)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image3']?> style="width:50%" onclick="currentSlide(3)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image4']?> style="width:50%" onclick="currentSlide(4)" >
    </div>
  </div>

  <div class="info">
	
	<p style="font-size: 30px; color: blue">{{$prod['price']}}</p>
	<hr>
	<p style="font-size: 20px;">
  Hard Disk Capacity: {{$prod['hard_disk_capacity']}}<br>
  RAM: {{$prod['ram']}} </p>
</div>

</div>


<div class="description">
<div class="row1">
	<div class="column1">
	<br>
	<h3>Description</h3>
<div class="desInfo">
	<p>{{$prod['discreption']}}</p>
  <img src=<?php echo $prod['image1']?> style="width:100%;"  >
</div>
	</div>
</div>
</div>

<div class="addInfo">
	<h3>Additional Information</h3>
	<table>
		<tr>
			<td>Brand</td>
			<th>{{$prod['brand']}}</th>
		</tr>		
		<tr>
			<td>Model</td>
			<th>{{$prod['model']}}</th>
		</tr>		
		<tr>
			<td>OS</td>
			<th>{{$prod['os']}}</th>
		</tr>
		<tr>
			<td>Hard Disk Capacity</td>
			<th>{{$prod['hard_disk_capacity']}}</th>
		</tr>
		
		<tr>
			<td>Processor Type</td>
			<th>intel 9th Gen core i7-9750H</th>
		</tr>	
		<tr>
			<td>{{$prod['processor_speed']}}</td>
			<th></th>
		</tr>	
			
		<tr>
			<td>Hard Disk Interface</td>
			<th>{{$prod['hard_disk_interface']}}</th>
		</tr>		
		<tr>
			<td>RAM</td>
			<th>{{$prod['ram']}}</th>
		</tr>		
		<tr>
			<td>Screen Size Range</td>
			<th>{{$prod['screen_size_range']}}</th>
		</tr>		
	</table>
</div>

<br> <br>
<div class="addInfo">
<h3>User Reviews</h3>
<table >

@foreach($review as $rev)

 <tr>
  <td class="bh">{{$rev['user']}} </td>
  <th class="wh">{{$rev['review']}}</th>

 
 </tr>
 @endforeach
 </table>
</div>
<br>





@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <form method="GET" action="{{route('searchy')}}" role="searchy">
                                        @csrf

                                        <textarea placeholder="Add Review.." name="searchy" rows="4" cols="50" name = "username" id="myTextarea"></textarea>
<!-- <input name="searchy" type="text" /><br><br> -->
<button class="rev button" type="sumbit">Add Review</button>
<!-- <button type="sumbit" id="btn"></button> -->
</form>
                    @else
                    <br>
                <div>
                 <h3 class="sign"> Sign in to add review </h3>
                <button type="button" class="log">   <a href="{{ route('login') }}" class="login">Login</a> </button>
                </div>         
                @endif
                </div>
            @endif
	<!-- <button class="review"type="submit" onclick="myFunction()"> Add Review</button> -->
 


</div>
<!-- 
<div class="Techrev">
	<br>
	
	<h3>Tech Reviews</h3>
	<textarea placeholder="Add Review.." rows="4" cols="50">
</textarea>
	<br><br>
	<button class="review">Add Review</button>
	
</div> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>

   <blockquote class="fotter">
        <button type="button" id="terms">Terms of service</button>
        <button type="button" id="privacy">Privacy policy</button>
        <button type="button" id="help">Help</button>
        <button type="button" id="contact">Contact</button>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3fgKbgTsBor95GmM0ZEZnCQPUHWoaiBZBv8IaD5gjfSFK3raFyG_xRuy3WqQ6afgN6lkWfcFK4JU9h6xPaZB-sDyqmXLyjYAlR63njVEVlvcOJm-cz4ilmjd1ljK2ftToclsG4w_3Bpe5g--vx6DNUn=w88-h100-no?authuser=0"/>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3en0iarGp25ZmYpU74gUnA8SrIgttVXgDc7GoqdnoGCQOVZsMbi8Hu-YaC6f_8HKmdJEGBHWJr-h8yk6Ov5R3NuVFJt6LrS7NnnEH8ilY4ZM0ngqbTqzIzVirVacdZqtDTn0DU5ppH8D4hkA4eFWogB=w96-h97-no?authuser=0"/>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3f1ZqJElUkjlAAc446e7RA36AqtHDnnLU6oGA2rJY3qR7xj1W8-SItr23VXh7RN_kSnesgwWIul0bUgpclUTGanQmfHxBpQm_YfLwzQr-bHNFSsF-Lv5mLhhNOba8Pb5oNiEFIJEN8_nmovFOjA5mcn=s107-no?authuser=0"/>
    </blockquote>

    @endforeach
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</div>
</div>
</body>
</html>

@endsection
