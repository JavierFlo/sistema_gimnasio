<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['h_id'])) {
    
    $name    = rtrim($_POST['name']);
    $date1    = rtrim($_POST['date1']);
    $bodyfat    = rtrim($_POST['bodyfat']);
    $muscle    = rtrim($_POST['muscle']);
    $calorie    = rtrim($_POST['calorie']);
    $remarks    = rtrim($_POST['remarks']);

    
    $h_id = $_POST['h_id'];
    
    mysqli_query($con, "INSERT INTO healthstatus (id,name,date1,bodyfat,muscle,calorie,remarks)
VALUES ('$h_id','$name','$date1','$bodyfat','$muscle,'$calorie,'$remarks')");
    echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";
} else {
    echo "<head><script>alert('Estado de Salud NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";
    
}
?>
