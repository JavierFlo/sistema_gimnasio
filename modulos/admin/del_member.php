<?php
include 'db_conn.php';


$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM user_data WHERE newid='$msgid'");
    mysqli_query($con, "DELETE FROM subsciption WHERE mem_id='$msgid'");
    echo "<html><head><script>alert('eliminando miembro');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<html><head><script>alert('ERROR! al eliminar miembro');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
}
mysqli_close($con);

?>