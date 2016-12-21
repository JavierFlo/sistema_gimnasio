<?php
include 'db_conn.php';

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM subsciption WHERE invoice='$msgid'");
    echo "<html><head><script>alert('Factura eliminada');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<html><head><script>alert('¡ERROR! al eliminar Factura');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
}
mysqli_close($con);

?>