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
    <title>ตัวละคร</title>
</head>

<body style="font-family:IBM Plex Sans Thai">
<?php include 'sidebar.php'; ?>

<div class="sm:ml-64 tracking-widest h-screen" style="background-image: url('img/bg_main01.jpg');">
<h1 class="p-2 text-white"><span class="text-[#c41012] font-bold">NEWS </span> ใช้ภาษา PHP</h1>


<!--การ์ดตัวละคร-->
<hr class="border border-[#59350f]">
<div class="p-2 text-center text-3xl mt-4">
    <h1 class="text-white mb-4 font-bold">ตัวละคร</h1>
</div>
<hr class="border border-[#59350f] mb-4"> 
<div class="grid grid-cols-4 font-bold gap-2 px-2">

<?php
include 'connectdb.php';
$sql =  'SELECT * FROM `character`, `clan`, `gender` WHERE character.character_clan_id=clan.clan_id AND character.character_gender_id=gender_id';
$run = mysqli_query($conn, $sql);
while (($row = mysqli_fetch_array($run, MYSQLI_ASSOC)) != NULL) {
?>
<!--การ์ด-->
<div class="w-full mb-2">


<a href="card_detail.php?character_id=<?php echo $row['character_id'];?>">
<img class="rounded-lg opacity-100 hover:opacity-60 drop-shadow-2xl" src="img/<?php echo $row['character_image'];?>" alt="">
<h1 class="p-2 text-white text-center drop-shadow-2xl"><?php echo $row['character_name'];?></h1>
</a>

</div>

<?php
     }
     mysqli_free_result($run);
     mysqli_close($conn);
 ?>
<!--จบ-->
</div>
</div>

<hr class="border border-[#59350f]"> 


</body>
</html>