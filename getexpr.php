<?php
    //Echo statements cannot be seen if PHP script placed here. Need to place it in the div home in order to see it.
    //echo \"Hello Php\";
    
    if(isset($_GET["bodypart"])) {
        //echo "Is set <br/>" . $_GET["bodypart"] . " <br/>" . $_REQUEST["bodypart"] . "<br/>";   
        if($_GET["bodypart"] == "Body Part") {
            $qryBodyPart = "";   
        }
        else {
            $qryBodyPart = "`Keyword`='" . strtolower($_GET["bodypart"]) . "'";
        }
    }
    
    if(isset($_GET["feelings"])) {
        if($_GET["feelings"] == "Feeling") {
            $qryFeelings = "";
        }
        else {
            $qryFeelings = "`Describe`='" . $_GET["feelings"] . "'";   
        }
    }
    
    $qry = "SELECT * FROM `tblexpressionsforwebtesting`";
    if($qryBodyPart == "") {
        if($qryFeelings != "") {
            $qry .= " WHERE " . $qryFeelings;
        }    
    }
    else {
        $qry .= " WHERE " . $qryBodyPart;
        
        if($qryFeelings != "") {
            $qry .= " AND " . $qryFeelings;
        }
        
    }

    echo $qry . "<br/>";

    $con=mysqli_connect("localhost", "root", "usbw", "movedb");
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, $qry);

    while($row = mysqli_fetch_array($result)) {
        echo "<b>" . $row['Expression'] . "</b>" . ": " . $row['Definition'] . "<br/>Example: " . $row['Example'] ;
        echo "<br/><br/>";
    }
    
    mysqli_close($con);
?>