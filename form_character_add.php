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
    <title>เพิ่มตัวละคร</title>
</head>
<body class="text-white" style="font-family:IBM Plex Sans Thai">
    <?php include 'sidebar.php'; ?>
    
<div class="sm:ml-64 tracking-widest" style="background-image: url('img/bg_main01.jpg');">

<h1 class="p-2 text-white "><span class="text-[#c41012] font-bold">NEWS </span> ใช้ภาษา PHP</h1>
<hr class="border border-[#59350f] mb-4"> 
            <div class="mx-auto max-w-screen-2xl px-4 lg:px-12 text-right">   

<section class="bg-black rounded-lg">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      
      <form role="form" method="post" action="add_character.php" enctype="multipart/form-data">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">ชื่อ</label>
                  <input type="text" name="character_name" id="character_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ใส่ชื่อของตัวละคร" required="">
              </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-white dark:text-white">เพศ</label>
                  <select name="character_gender_id" id="character_gender_id" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <?php
                                               include 'connectdb.php';
                                               $sql =  'select * from gender '
                                                       . 'order by gender_id';
                                               $result = mysqli_query($conn,$sql);
                                               while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                                   echo '<option value=';
                                                   echo '"' . $row['gender_id'] . '">';
                                                   echo $row['gender_name'];
                                                   echo '</option>';
                                               }
                                               mysqli_free_result($result);
                                               mysqli_close($conn);
                                           ?>

                  </select>
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-white dark:text-white">ส่วนสูง</label>
                  <input type="number" name="character_height" id="character_height" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ส่วนสูงของตัวลคร" required="">
              </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-white dark:text-white">เผ่าพันธุ์</label>
                  <select name="character_clan_id" id="character_clan_id" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <?php
                                               include 'connectdb.php';
                                               $sql =  'select * from clan '
                                                       . 'order by clan_id';
                                               $result = mysqli_query($conn,$sql);
                                               while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                                   echo '<option value=';
                                                   echo '"' . $row['clan_id'] . '">';
                                                   echo $row['clan_name'];
                                                   echo '</option>';
                                               }
                                               mysqli_free_result($result);
                                               mysqli_close($conn);
                                           ?>

                  </select>
              </div>

              <div>
                  <label for="item-weight" class="block mb-2 text-sm font-medium text-white dark:text-white">นํ้าหนัก</label>
                  <input type="number" name="character_weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="นํ้าหนักของตัวละคร" required="">
              </div> 
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-white">เนื้อเรื่องย่อ</label>
                  <textarea name="character_storyline" id="character_storyline" rows="8" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="เนื้อเรื่องย่อของตัวละคร"></textarea>
              </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-white">สไตล์การต่อสู้</label>
                  <textarea name="character_fight_style" id="character_fight_style" rows="8" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="สไตล์การต่อสู้ตัวละคร"></textarea>
              </div>

              <div>
              <input name="character_img" type="file">
            </div>

          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              เพิ่มตัวละคร
          </button>
      </form>
  </div>
</section>
    
</div>

</div>

</body>
</html>