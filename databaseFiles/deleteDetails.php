<?php 
require_once 'database_connections.php';
$data = json_decode(file_get_contents("php://input")); 
//$query = "DELETE FROM emp_details WHERE emp_id=$data->del_id";

$del_update_status_query = "UPDATE emp_details 
                            SET status = 0
                            WHERE emp_id = $data->del_id
                            ";

mysqli_query($con, $del_update_status_query);
echo true;
?>