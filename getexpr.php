<?php
    //Echo statements cannot be seen if PHP script placed here. Need to place it in the div home in order to see it.
    //echo \"Hello Php\";
    
    $con=mysqli_connect("localhost", "root", "usbw", "movedb");

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM tblexpressionsforwebtesting");
    
    while($row = mysqli_fetch_array($result)) {
        echo "<b>" . $row['Expression'] . "</b>" . ": " . $row['Definition'] . "<br/>Example: " . $row['Example'];
        echo "<br/><br/>";
        
    }

    mysqli_close($con);
    
?>