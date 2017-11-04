<?php
  function validate_empty($field, $message){
    if(trim($field) == ""){
      $_SESSION["flash"] = $message;
      return false;
    }
    return true;
  }

  function validate_unique_email($email){
    $sql = "select * from users where email='$email'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "Email was existed.";
      return false;
    }
    return true;
  }
?>
