<?php
            include 'connectdb.php';
            $character_id = $_GET['character_id'];
            $sql = "DELETE FROM `character` WHERE character_id='$character_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script> window.location='character_list.php'; </script> " ;
            }else{
                echo 'ลบไม่ได้';
            }
            mysqli_close($conn);
?>