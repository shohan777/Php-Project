<?php

$conn = oci_connect("hr", "hr", "localhost/orcl");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql = 'SELECT * FROM employees WHERE department_id = :didbv ORDER BY last_name';
$stid = oci_parse($conn, $sql);
$didbv = 60;
oci_bind_by_name($stid, ':didbv', $didbv);
oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
    echo $row['SALARY'] ."<br>\n";
}

// Output is
//    Austin
//    Ernst
//    Hunold
//    Lorentz
//    Pataballa

oci_free_statement($stid);
oci_close($conn);

?>