<?php
require_once "..\config.php";
$result = "";
if (empty($_POST['teamname']) || empty($_POST['teamDesc'])) {
    $result = "Fillup All Data";
}
else{
    session_start();
    $teamName = $_POST['teamname'];
    $teamDesc = $_POST['teamDesc'];
    $createdBy = $_SESSION['email'];
    
    $sql = "INSERT INTO team(team_name, team_desc, createdby) VALUES ('$teamName', '$teamDesc', '$createdBy')";
    if(mysqli_query($conn,$sql) )
    {
        echo '<div class="text-center w-100 h-100 d-flex align-items-center justify-content-center">
        <h4 class="text-center w-75 h-75 d-flex  align-items-center justify-content-center">
            <i class="fas fa-check-circle text-primary"></i> 
            Registration Complete!!
        </h4>
        </div>';
        
    }
     else{
      echo "ERROR: Could not able to execute . " . mysqli_error($conn);
    }
}

?>