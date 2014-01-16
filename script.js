$(document).ready(function() {
    "use strict";
    //Echo statements cannot be seen if PHP script placed outside 'div home'. Need to place it in the 'div home' in order to see it.
    
    var phpstring = "<?php                                                                                                              \
            $con=mysqli_connect(\"localhost\", \"root\", \"usbw\", \"movedb\");                                                         \
            if(mysqli_connect_errno()) {                                                                                                \
                echo \"Failed to connect to MySQL: \" . mysqli_connect_error();                                                         \
            }                                                                                                                           \
            $result = mysqli_query($con, \"SELECT * FROM tblexpressionsforwebtesting\");                                                \
            while($row = mysqli_fetch_array($result)) {                                                                                 \
                echo \"<b>\" . $row[\'Expression\'] . \"</b>\" . \": \" . $row[\'Definition\'] . \"<br/>Example:\" . $row[\'Example\']; \
                echo \"<br/><br/>\";                                                                                                    \
            }                                                                                                                           \
            mysqli_close($con);                                                                                                         \
        ?>";
    
    $("#submit_btn").click(function() {
        //alert("Submit search query");
        //$("#home").html("Submit button speaks to you!");
        
        alert(phpstring);
        $("#home").html(phpstring);
    });
});