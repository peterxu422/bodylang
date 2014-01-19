<?php
    //Echo statements cannot be seen if PHP script placed here. Need to place it in the div home in order to see it.
    //echo \"Hello Php\";
    
    if(isset($_GET["bodypart"])) {
        //echo "Is set <br/>" . $_GET["bodypart"] . " <br/>" . $_REQUEST["bodypart"] . "<br/>";   
        $qry = "WHERE Keyword='" . strtolower($_GET["bodypart"]) . "'";
    }
    else {
        echo "Is Not Set<br/>";
    }

    $con=mysqli_connect("localhost", "root", "usbw", "movedb");
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM tblexpressionsforwebtesting " . $qry);

    while($row = mysqli_fetch_array($result)) {
        echo "<b>" . $row['Expression'] . "</b>" . ": " . $row['Definition'] . "<br/>Example: " . $row['Example'];
        echo "<br/><br/>";
    }
    
    mysqli_close($con);
?>