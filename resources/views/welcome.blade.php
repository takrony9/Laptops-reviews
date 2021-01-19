<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="homeStyle.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            
.menu{
	background: black;
	padding: 10px;
    border-radius: 5px;
    height: 40px;
}
.menu button,.menu div{
  float: left;
  border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 16px;
  margin-left: 180px;
}
 /* .menu div{
    position: relative;
    left: 100px;
}  */

.menu a{
	color: white;
    text-decoration: none;
    
}
.topnav {
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
  bottom: 150px;
  right: 350px;
  }

.topnav p  {
	color: blue;
	text-transform: uppercase;
	position: relative;
	left: 800px;
	bottom: 150px;
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
	background: #e6e6e6;
	border: 5px ;
	position: relative;
    bottom: 150px;
  text-align: center;
}

.types button{  
  color: black;
  background: none;
  text-align: center;
  padding-left:100px; 
  font-size: 20px;
  border: none;
  position: relative;

 }


 .img img{
 	position: relative;
 	left: 550px;
 	bottom: 130px;
 	height: 400px;
 }
 .trust {
background: #e6e6e6;
	border: 5px ;
position: relative;
	bottom: 170px;
    height: 50px;
    margin-bottom: 200px;
	}
 .trust h2{
 	position: relative;
 	left: 250px;
 }

 .trust img{
 	width: 50px;
 	height: 50px;
 position: relative;
	bottom: 50px;
	left: 800px;
 }
 .trust p{
 	
 position: relative;
	bottom: 100px;
	left: 850px;
 }

 .space{
 	background: orange;
 	height: 10px;
 	position: relative;
 	bottom: 320px;
 }
 .reviews    {
   position: relative;
   bottom:  290px;
   left: 140px;
   
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
    position: relative;
    bottom: -50px;
    right: 700px;
 }
 





       </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <!-- url('/product') -->
    <body >
        <div >
            
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
    <div class="topnav">
    	<img src="https://lh3.googleusercontent.com/pw/ACtC-3dx5Afj2Nri2NfRKf_sjzmdnEC5XzX01kn5ZNZAOSwtXVUhJnHHYBliOwdxhVSShdQiQdsq6VUw30QyRCjkHs6DUqufqk456E5VqBVggmMM5vdTiPzqFRqoaS-g0jgHrq_9pEjrWiTYncbqNrBXJdaQ=s782-no?authuser=0"/>
       
        <form method="GET" action="{{route('searchyy')}}" role="searchyy">
@csrf
<input type="text" placeholder="Search.." name="searchyy">

<!-- <button type="sumbit" id="btn"></button> -->
</form>
   
          <p>the best place you can find a review</p>
    </div>
    <blockquote class="types">
    	<button type="button">dell</button>
        <button type="button">hp</button>
        <button type="button">hawawi</button>
        <button type="button">asus</button>
        <button type="button">samsung</button>
        <button type="button">microsoft</button>
         <button style="color: blue;" type="button" id="More">More</button>
    </blockquote>
    <div class="img"> 
         <img src="https://lh3.googleusercontent.com/pw/ACtC-3fJOquUy5XLvT1lk__ntjolPacLVXcQaUvWUB1Hqqg3O8emR0aY14N2dKSpFHa6h1LPVgJHLQHkn_ZC0P753U0mkR9ppVTJ8iZQy2DaRl2yGdAiLJR_Fsa3tmDSmI4ps7T9ZP1_wp4YpfTNYVS_Fi2z=w700-h396-no?authuser=0"/>
       </div>
    <blockquote class="trust">
    	<h2>100% Trusted reviews</h2>
    	<img src="https://lh3.googleusercontent.com/pw/ACtC-3eHdP7Yzn1N48TGuoE0LhrDyIv_P18BXkziOZ0t0EYuDhSVVmqw4skwvbILXBJEznYhJI8L8UbISOpU1OGxJ-bTuvdxoUU8I15HVqikXyOA-Ik5jbXfdfqHt9gnAmq7xB4Bpc7Q5rk594p2zGWyZCkx=s256-no?authuser=0">
    	<p>24/7 support system</p>
    </blockquote>
    <blockquote class="space"></blockquote>
    <img class="reviews" src='https://lh3.googleusercontent.com/pw/ACtC-3dWNKEvHq44GojDUGEpcCTbITygFMbMjLSTg3fRRo5nkAJySGGr05YKGQehWX3GPcCeYYO55LrILwUUDqesgSUN1FWMGskF8J38oKZPidZJ29l17VWl_oRU0H1X-gudPYzXGl-iwtYMmGTiTAU35b4a=w1280-h617-no?authuser=0' width="1400" height="600"/>
    <blockquote class="fotter">
        <button type="button" id="terms">Terms of service</button>
        <button type="button" id="privacy">Privacy policy</button>
        <button type="button" id="help">Help</button>
        <button type="button" id="contact">Contact</button>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3fgKbgTsBor95GmM0ZEZnCQPUHWoaiBZBv8IaD5gjfSFK3raFyG_xRuy3WqQ6afgN6lkWfcFK4JU9h6xPaZB-sDyqmXLyjYAlR63njVEVlvcOJm-cz4ilmjd1ljK2ftToclsG4w_3Bpe5g--vx6DNUn=w88-h100-no?authuser=0"/>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3en0iarGp25ZmYpU74gUnA8SrIgttVXgDc7GoqdnoGCQOVZsMbi8Hu-YaC6f_8HKmdJEGBHWJr-h8yk6Ov5R3NuVFJt6LrS7NnnEH8ilY4ZM0ngqbTqzIzVirVacdZqtDTn0DU5ppH8D4hkA4eFWogB=w96-h97-no?authuser=0"/>
        <img src="https://lh3.googleusercontent.com/pw/ACtC-3f1ZqJElUkjlAAc446e7RA36AqtHDnnLU6oGA2rJY3qR7xj1W8-SItr23VXh7RN_kSnesgwWIul0bUgpclUTGanQmfHxBpQm_YfLwzQr-bHNFSsF-Lv5mLhhNOba8Pb5oNiEFIJEN8_nmovFOjA5mcn=s107-no?authuser=0"/>
    </blockquote>
    </body>
</html>
