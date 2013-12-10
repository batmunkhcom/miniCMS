<?php

putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/dbhome_2");
putenv("LD_LIBRARY_PATH=/u01/app/oracle/product/11.2.0/dbhome_1/lib:/lib:/usr/lib");

phpinfo();
// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('hr', 'welcome', 'localhost:1521/orcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
    echo 'OCI connected';
}

$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>