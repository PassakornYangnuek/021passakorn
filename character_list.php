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
    <title>รายการตัวละคร</title>
</head>
<body class="text-white" style="font-family:IBM Plex Sans Thai">
    <?php include 'sidebar.php'; ?>
    
<div class="sm:ml-64 tracking-widest h-screen" style="background-image: url('img/bg_main01.jpg');">

<h1 class="p-2 text-white "><span class="text-[#c41012] font-bold">NEWS </span> หน้าของรายการตัวละคร</h1>
<hr class="border border-[#59350f] mb-4"> 
            <div class="mx-auto max-w-screen-2xl px-4 lg:px-12 text-right">   
            <a href="form_character_add.php" class=" my-4 px-2 text-white hover:text-[#727272]">
                                เพิ่มตัวละคร
</a>
                            

    <table class="w-full text-sm text-left text-white rounded-lg bg-black">
        <thead class="text-xs text-white">

            <tr>
                <th scope="col" class="px-6 py-3">
                    <img src="" alt="">
                    ชื่อ
                </th>

                <th scope="col" class="px-6 py-3">
                    เผ่าพันธุ์
                </th>
                <th scope="col" class="px-6 py-3">
                    เพศ
                </th>
                <th scope="col" class="px-6 py-3">
                    ส่วนสูง
                </th>
                <th scope="col" class="px-6 py-3">
                    นํ้าหนัก
                </th>
                <th scope="col" class="px-6 py-3">

                </th>

            </tr>
        </thead>
        <tbody class="rounded-lg">
        

<?php
include 'connectdb.php';
$sql =  'SELECT * FROM `character`, `clan`, `gender` WHERE character.character_clan_id=clan.clan_id AND character.character_gender_id=gender_id';
$run = mysqli_query($conn, $sql);
while (($row = mysqli_fetch_array($run, MYSQLI_ASSOC)) != NULL) {
?>
<tr>

                <th scope="row" class="grid grid-cols-2 gap-2 items-center px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                <img class="w-16 rounded" src="img/<?=$row['character_image'];?>">
                
                <?=$row['character_name'];?>
                </th>

                <td class="px-6 py-4">
                <?=$row['clan_name'];?>
                </td>
                <td class="px-6 py-4">
                <?=$row['gender_name'];?>
                </td>
                <td class="px-6 py-4">
                <?=$row['character_height'];?>
                </td>
                <td class="px-6 py-4">
                <?=$row['character_weight'];?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="form_character_edit.php?character_id=<?php echo $row['character_id'];?>" class="font-medium text-white hover:text-[#727272]">แก้ไข</a>
                    <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='delete_character.php?character_id=<?php echo $row["character_id"];?>'}" class="font-medium text-white hover:text-[#727272]">ลบ</a>
                </td>
            </tr>
            
            <?php
     }
     mysqli_free_result($run);
     mysqli_close($conn);
 ?>

        </tbody>
    </table>
    
</div>

</div>


</body>
</html>