<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($GET_["id"])){
    $id = $_GET["id"];
    echo $id;
    $sql = "delete * from users where id = $id";
    $conn->query($sql);
    $result = $conn->query($sql);
    if ($result) {
      $_SESSION["flash"] = "Xoa Thanh Cong";
    }else{
      $_SESSION["flash"] = "Xoa Khong Thanh Cong";
    }
  }else{
    $_SESSION["flash"] = "Khong Co Tham So"
  }
  redirect("index.php");
?>
