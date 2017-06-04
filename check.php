<html>

<head>

<link rel = "stylesheet" type = "text/css" href = "check-style.css">

<title> Check </title>

</head>

<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    $sql = 'SELECT * FROM bookdata';

    $result = mysqli_query($database,$sql);

?>

<a href = "booking.php" class = "back"> < </a>

<body id = "all">

<center>

<div id = "tab">

<p class = "schedule"> Booking Schedule </p>

<table style="width:80%">

  <tr>
  
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



