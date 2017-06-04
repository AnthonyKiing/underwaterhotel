<!--

<html>

<header>

<link rel = "stylesheet" type = "text/css" href = "ad-style.css">

<title>Admin</title>

</header>

<?php

    session_start();
    $database = mysqli_connect("127.0.0.1","root","","booking");

    if(isset($_POST['up'])) {

        $checkinup = ($_POST['checkinup']);
        $checkoutup = ($_POST['checkoutup']);
        $typeroomup = ($_POST['typeroomup']);
        $priceup = ($_POST['priceup']);
        $av = ($_POST['av']);

        $sql = "UPDATE bookdata (checkinup, checkoutup, typeroomup, priceup, av)
            VALUES ('$checkinup','$checkoutup','$typeroomup','$priceup','$av')";

        $resultup = mysqli_query($database,$sql);
        header('location: ad-home.php');
}

?>

<center>

<body id = "all">

<br>

<p class = "hr">   </p>

<br>

   <p class = "enjoy-paradise">

    WELCOME ADMIN

</p>

        <label for = "chin" class = "checkin"> Check In </label> 
        <input id = "checkin" name = "checkinup" required = "required" type = "date" 
            placeholder = "Check In"/>
</br>
        <label for = "chout" class = "checkout"> Check Out </label>
        <input id = "checkout" name = "checkoutup" required = "required" type = "date" 
            placeholder = "Check Out"/>
</br>
        <label for = "type" class = "typeroom"> Type Room </label>
        <input id = "typeroom" name = "typeroomup" required = "required" type = "text"
             list = "rm"/>

        <datalist id = "rm">

            <option> Les Sunken Suite </option>
            <option> Submerged Suite </option>
            <option> Aquatic Suite </option>
            <option> Grand Sunken Suite </option>
            <option> The Royal Bridge Suite </option>
            <option> Presidential Suite </option>

</datalist>
</label>
</br>
        <label for = "price" class = "roomprice"> Room Price </label>
        <input id = "roomprice" name = "priceup" required = "required" type = "int" 
            placeholder = "Price"/>
</br>

        <label for = "avail" class = "availability"> Availability
        <input id = "av" name = "av" required = "required" list = "ava"/>

        <datalist id = "ava">

            <option> Available </option>
            <option> Not Available </option>

</datalist>
</label>
</br>
        <input type = "submit" class = "up" value = "Update" name = "up">

</br>
        <input type = "submit" class = "upnow" value = "Update Now" name = "upnow">
</br>
        <input type = "submit" class = "vw" value = "View List" name = "view">
        </br>
       


<div id = "tab">

<p class = "schedule"> Lists </p>

<table style="width:80%">
  <tr>
    <th>Check In Date</th>
    <th>Check Out Date</th>
    <th>Room Type</th>
    <th>Price</th>
    <th>Availability</th>

  </tr>

<?php

    while($view = mysqli_fetch_assoc($resultup)){

    echo "<tr>";
    echo    "<td>" .$view['checkinup']. "</td>";
    echo    "<td>" .$view['checkoutup']. "</td>";
    echo    "<td>" .$view['typeroomup']. "</td>";    
    echo    "<td>" .$view['priceup']. "</td>";
    echo    "<td>" .$view['av']. "</td>";
    echo "</tr>";

}

?>

</table>
</div>

<a href = "../home.php" class = "alogout"><u> Log Out </u></a>


</body>
</center>
</html>

-->

<html>

<head>

<link rel = "stylesheet" type = "text/css" href = "check-style.css">

<title> Admin </title>

</head>

<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    $sql = 'SELECT userdata.email, checkin, checkout, guest, room, typeroom, roomprice 
            FROM bookdata join userdata';

    $result = mysqli_query($database,$sql);

?>

<a href = "booking.php" class = "back"> < </a>

<body id = "all">

<center>

<div id = "tab">

<p class = "schedule"> Booking Schedule </p>

<table style="width:80%">

  <tr>

    <th>Customer Email</th>
    <th>Check In Date</th>
    <th>Check Out Date</th>
    <th>No. of Guests</th>
    <th>No. of Rooms</th>
    <th colspan = "2">Room | Price (PESO)</th>
    <th>Total Price</th>

  </tr>

<?php

    while($view = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo    "<td>" .$view['email']. "</td>";
    echo    "<td>" .$view['checkin']. "</td>";
    echo    "<td>" .$view['checkout']. "</td>";
    echo    "<td>" .$view['guest']. "</td>";
    echo    "<td>" .$view['room']. "</td>";
    echo    "<td>" .$view['typeroom']. "</td>";    
    echo    "<td>" .$view['roomprice']. "</td>";
    echo    "<td>" .$view['room'] * $view['roomprice']. "</td>";
    echo "</tr>";
   
    }

?>

</table>
</div>

</center>

</body>
</html>



