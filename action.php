<?php
    require_once 'config.php';
    $output='';
    $sql="SELECT * FROM district WHERE state_id='".$_POST['stateID']."' ORDER  BY district";
    $result=mysqli_query($mysqli,$sql);
    $output .='<option value="">-Select District-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .='<option value="'.$row["id"].'">'.$row["district"].'</option>';
    }
    echo $output;
?>