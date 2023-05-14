<?php
include 'connectdb.php';

$character_name = $_POST['character_name'];
$character_storyline = $_POST['character_storyline'];
$character_clan_id = $_POST['character_clan_id'];
$character_gender_id = $_POST['character_gender_id'];
$character_height = $_POST['character_height'];
$character_fight_style = $_POST['character_fight_style'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['character_img']['tmp_name'])) {
$new_image = 'img_'.uniqid().".".pathinfo(basename($_FILES['character_img']['name']), PATHINFO_EXTENSION);
$image_upload_path = "./img/".$new_image;
move_uploaded_file($_FILES['character_img']['tmp_name'],$image_upload_path);
} else {
$new_image = "";
}

$character = "INSERT INTO `character` (character_name,character_storyline,character_clan_id,character_gender_id,character_height,character_fight_style,character_image) VALUES ('$character_name','$character_storyline','$character_clan_id','$character_gender_id','$character_height','$character_fight_style','$new_image')";
$result=mysqli_query($conn,$character);
if($result){
echo "<script> window.location='character_list.php'; </script> " ;
}else{
echo "Error:" . $character . "<br>" . mysqli_error($conn);
echo "<script> alert('บันทึกข้อมูลไมไ่ด้'); </script> " ;
}
mysqli_close($conn);
?>