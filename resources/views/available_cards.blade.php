<!DOCTYPE html>
<html lang="en">
<head>
    <title>MY AVAILABLE CARDDS</title>
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
    <a  href="{{route('index')}}">ADD NEW CARD</a>
    <a href="{{route('paybill')}}">PAY BILL</a>
    <a class="active" href="{{route('availableCards')}}">ALL MY AVAILABLE CARDS</a>
    <a href="{{route('usedCards')}}">USED CARDS </a>
    <a href="{{route('corruptedCards')}}">CORRUPTED CARDS </a>
    <a href="{{route('inquiry')}}">INQUIRY</a>
</div>

<div class="container-contact100">
    <div class="wrap-contact100">


        @if($givenDate!=0)
            <span>Picked Date: {{$givenDate}}</span>
        @endif

        <form class="form-inline validate-form" id="form" action="availableCardsDate">
            @csrf
            <div class="form-group" >
                <label for="date">DATE:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn" type="submit" id="submit">
							<span>
								SUBMIT
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
                    </button>
                </div>
            </div>


        </form>

    </div>



    <table style="width:70%">
        <tr>
            <th>card type</th>
            <th>5</th>
            <th>10</th>
            <th>15</th>
            <th>25</th>
            <th>30</th>
            <th>40</th>
            <th>50</th>
            <th>60</th>
            <th>75</th>
            <th>100</th>
            <th>150</th>

        </tr>
        <tr>
            <td>quantity</td>
            <td>{{$type_numbers['5']}}</td>
            <td>{{$type_numbers['10']}}</td>
            <td>{{$type_numbers['15']}}</td>
            <td>{{$type_numbers['25']}}</td>
            <td>{{$type_numbers['30']}}</td>
            <td>{{$type_numbers['40']}}</td>
            <td>{{$type_numbers['50']}}</td>
            <td>{{$type_numbers['60']}}</td>
            <td>{{$type_numbers['75']}}</td>
            <td>{{$type_numbers['100']}}</td>
            <td>{{$type_numbers['150']}}</td>

        </tr>

    </table>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
    <div>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <th>card type</th>
                <th>card number</th>
                <th>card serial number</th>
                <th>date</th>
            </tr>
            @foreach($available_cards as $card)
                <tr>
                    <td>{{$card['type']}}</td>
                    <td>{{$card['number']}}</td>
                    <td>{{$card['serialNumber']}}</td>
                    <td>{{$card['updated_at']->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </table>
    </div>


    <div class="wrap-contact100">
        <h4>

            total credit:   {{$type_numbers['totalAmount']}}

        </h4>

    </div>
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

<!-- By Oussy-->
<script>
    $("#form").submit(function (e){
        e.preventDefault();
    });
</script>


</body>
</html>
