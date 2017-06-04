<html>

<head>

<link rel = "stylesheet" type = "text/css" href = "events-style.css">

<title> Events </title>

</head>



<!---------------------------------------------------------------------->
<!--Les Sunken Suite-->
<?php

    session_start();
    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked1'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Les Sunken Suite','15000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: check.php");
}

?>


<center>

<body id = "all">

    <div class = "header">

        <div id = "header1">

            <nav>

                <ul>

            <li class = "row1">
            <a href = "logged-home.php" > HOME </a>
            </li>
            <li class = "row1">
            <a href = "logged-rooms.php" > ROOMS </a>
            </li>
            <li class = "row1">
            <a href = "logged-gallery.php" > GALLERY </a>
            </li>
            <li class = "row1">
            <a href = "logged-booking.php"> BOOKING </a>
            </li>
            <li class = "row1">
            <a href = "logged-events.php"> EVENTS </a>
            </li>
            <li class = "row1">
            <a href = "logged-about.php"> ABOUT </a>

</li>
</ul>
</nav>
</div>
</div>

<br>

<p class = "hr">   </p>

<br>


<!--Events-->


<p class = "eventsmsg">

    Meetings &</br>
    Events</br>

</p>
<p class = "eventline"></p>

    <p class = "evmsg">Sunken Haven plays host to some of the most stunning wedding,</br>
                       party, meeting and conference venues.

</p>

<div class = "evebc">

<!------------------------------------------------------------------------------>

   <p class = "pic1">

    Wedding's &</br> 
    Honeymon's

    </p>

    <p class = "roomline1"></p>

    <p class = "pic1msg">Celebrate your wedding, honeymoon, </br>
                        anniversary or renewal of vows in a romantic</br>
                        luxury resort.</p>
    </p>

    <div class = "img1">

        <img src = "pics/wed00.jpg">

    </div>

    <div class = "bookwed">

        <!--<a href = "bookpage.php" class = "linkbookwed"> Book Now </a>-->

        <input type = "submit" class = "linkbookwed" value = "Book Now" 
                name = "bookwed">

    </div>

    

<!------------------------------------------------------------------------------>

   <p class = "pic2">

    Meeting's

    </p>

    <p class = "roomline2"></p>

    <p class = "pic2msg">At Sunken Haven, our hotels have the facilities</br>
                        and services ideally suited for your groups</br> 
                        and offer simple, bundled pricing.</p>
    </p>

    <div class = "img2">

    <img src = "pics/meet01.jpg">

    </div>

    <div class = "bookmeet">

        <a href = "bookpage.php" class = "linkbookmeet"> Book Now </a>

    </div>

<!------------------------------------------------------------------------------>

   <p class = "pic3">

    Celebration's</br> 

    </p>

    <p class = "roomline3"></p>

    <p class = "pic3msg">Celebrate your birthday, reunion,</br>
                        anniversary in a luxurious underwater</br>
                        resort.</p>
    </p>

    <div class = "img3">

    <img src = "pics/celebrations.jpg">

    </div>

    <div class = "bookcel">

        <a href = "bookpage.php" class = "linkbookcel"> Book Now </a>

    </div>

</div>

</body>

<div class = "foot">

<div class = "foo">

&copy; 2017 Anthony & Tin. All Rights Reserved | Sunken Haven by
<div class = "jeotin"> AnthonyTin </div>

</div>

</div>

</center>

<a href = "#all"> <div class = "btp"> ^ </div> </a>

</html>