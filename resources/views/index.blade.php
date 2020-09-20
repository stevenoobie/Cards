<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD NEW CARD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="sidebar">
    <a class="active" href="{{route('index')}}">ADD NEW CARD</a>
    <a href="{{route('paybill')}}">PAY BILL</a>
    <a href="{{route('availableCards')}}">ALL MY AVAILABLE CARDS</a>
    <a href="{{route('usedCards')}}">USED CARDS </a>
    <a href="{{route('corruptedCards')}}">CORRUPTED CARDS </a>
    <a href="{{route('inquiry')}}">INQUIRY</a>
</div>


<div class="container-contact100">
    
    <div class="wrap-contact100">

        <form class="contact100-form validate-form" id="card-form" action="pageController">
            @csrf
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <span class="contact100-form-title">
					ADD NEW CARD
			</span>

            @if(count($errors)>0)
                <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger" >{{$error}}</li>
                    @endforeach
                </ul>
                @endif

            <div class="wrap-input100 input100-select">
                <span class="label-input100" >CARD TYPE</span>
                <div>
                    <select id="cardType" name='cardType' class="selection-2">
                        <option selected="selected" value="0">Select cardType</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                    </select>
                </div>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input"  data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">CARD NUMBER </span>
                <input class="input100" type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" required autocomplete="cardNumber" autofocus>

                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">CARD SERIAL NUMBER </span>
                <input class="input100" type="text" id="cardSerialNumber" name="cardSerialNumber" placeholder="Enter card serial number" required autocomplete="cardSerialNumber" autofocus>
                <span class="focus-input100"></span>
            </div>


            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button id="submit" type="submit" class="contact100-form-btn">
							Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="../vendor/daterangepicker/moment.min.js"></script>
<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>



<!-- Added functions by Oussy  -->


<script>
    $("#card-form").submit(function (e){
       e.preventDefault();
    });

document.getElementById('submit').onclick=function () { submit() };


function submit(){
 var cardType=document.getElementById('cardType').value;
 var cardNumber=document.getElementById('cardNumber').value;
 var cardSerialNumber=document.getElementById('cardSerialNumber').value;
 var card='';



 /*if(cardNumber==''||cardSerialNumber==''){
     alert("Failed");
 }else {
     card={
         number:cardNumber,
         serial:cardSerialNumber,
         type:cardType
     }
     //alert(card)
 }
*/

}
</script>


</body>
</html>
