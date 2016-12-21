<?php
include 'db_conn.php';

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM mem_types WHERE mem_type_id='$msgid'");
    echo "<html><head><script>alert('Plan Eliminado);</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=change_values.php'>";
} else {
    echo "<html><head><script>alert('ERROR! al eliminar plan');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=change_values.php'>";
}
mysqli_close($con);

?>

