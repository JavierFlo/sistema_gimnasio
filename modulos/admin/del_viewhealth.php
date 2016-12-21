<?php
include 'db_conn.php';

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM healthstatus WHERE id='$msgid'");
    echo "<html><head><script>alert('Estado de Salud eliminado');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
} else {
    echo "<html><head><script>alert('ERROR! al eliminar Estado de Salud');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
}
mysqli_close($con);

?>

