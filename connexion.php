<?php
      
$Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
$MDP = isset($_POST["MDP"])? $_POST["MDP"] : "";

$database = "eceamazon";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
$sql = "SELECT * FROM utilisateur";
    if ($Mail != "") {
        $sql .= " WHERE Mail LIKE '%$Mail%'";
    if ($MDP != "") {
        $sql .= " AND MDP LIKE '%$MDP%'";
        }
}
$result = mysqli_query($db_handle, $sql);

if (mysqli_num_rows($result) == 0) {
echo "l'utilisateur n'existe pas";
} else {
    echo "l'utilisateur existe !";
}
}

mysqli_close($db_handle);
    
?>
 

 