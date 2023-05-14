<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400&display=swap" rel="stylesheet">
    <title>ตัวละครรายละเอียด</title>
</head>

<body style="font-family:IBM Plex Sans Thai">
<?php include 'sidebar.php'; ?>

<div class="sm:ml-64 tracking-widest" style="background-image: url('img/bg_main01.jpg');">
<h1 class="p-2 text-white"><span class="text-[#c41012] font-bold">NEWS </span> ใช้ภาษา PHP</h1>


<!--การ์ดตัวละคร-->
<hr class="border border-[#59350f]">

<?php 
include 'connectdb.php';
$character_id = $_GET['character_id'];
$run =  "SELECT * FROM `character`, `clan`, `gender` WHERE character.character_clan_id=clan.clan_id AND character.character_gender_id=gender_id AND character.character_id='$character_id' ";
$result = mysqli_query($conn,$run);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC)
                                    ?>

<div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-2 p-2 text-white ">
    
<div class="overflow-hidden mb-2 rounded-lg">
    <img class="rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300" src="img/<?=$row['character_image'];?>" alt="">

</div>

<div class="m-auto">
<h1 class="text-center text-4xl mb-8"><?=$row['character_name'];?>
</h1>
<p class="p-2"><?=$row['character_storyline'];?></p>
<hr class="border border-[#59350f]">
<p class="p-2">เผ่าพันธุ์ : <?=$row['clan_name'];?></p>
<hr class="border border-[#59350f]">
<p class="p-2">เพศ : <?=$row['clan_name'];?></p>
<hr class="border border-[#59350f]">
<div class="flex">
<p class="p-2">ส่วนสูง : <?=$row['character_height'];?></p>
<p class="p-2">นํ้าหนัก : <?=$row['character_weight'];?></p>
</div>
<hr class="border border-[#59350f]">
<p class="p-2">สไตล์การต่อสู้ : <?=$row['character_fight_style'];?></p>
</div>

</div>



</div>
</div>

<hr class="border border-[#59350f]"> 


</body>
</html>