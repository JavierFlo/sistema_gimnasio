<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['id'])) {
    
    $name  = rtrim($_POST['name']);
    $date1 = rtrim($_POST['date1']);
    $bodyfat   = rtrim($_POST['bodyfat']);
    $muscle  = rtrim($_POST['muscle']);
    $calorie = rtrim($_POST['calorie']);
    $remarks = rtrim($_POST['remarks']);


    
    $id = $_POST['id'];
    
    mysqli_query($con, "INSERT INTO healthstatus (id,name, date1,bodyfat,,muscle,calorie,remarks)
VALUES ('$id','$name','$date1','$bodyfat','$muscle','$calorie','$remarks')");
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
    
}
?>
