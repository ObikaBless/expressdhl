 <?php

    session_start();

    if (!isset($_SESSION['userAuth'])) {
        session_destroy();
        echo "<script>location.replace('/login.php')</script>";
    }


    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin</title>
     <link rel="stylesheet" href="css/all.css">

     <link rel="stylesheet" href="css/companyscss.css">
 </head>

 <body>

     <div class="container_main_sec">
         <button class="btn_open_main">menu</button>
         <div class="sidebar hidden_sidebar">
             <div class="logo">
                 <img src="./images/New/100ppi/4x/Asset 5.png" alt="" style="object-fit: contain;">
             </div>
             <div class="menu_wrapper">
                 <div class="menu_wrapper_comp">
                     <a href="/admin.php">
                         <div class="icons">
                             <i class="fas fa-home"></i>
                         </div>
                         <div class="home_contents">home</div>

                     </a>
                 </div>
                 <div class="menu_wrapper_comp">
                     <a href="/allshipping.php">
                         <div class="icons">
                             <i class="fas fa-ship"></i>
                         </div>
                         <div class="home_contents">all shipments</div>

                     </a>
                 </div>

             </div>
         </div>


         <script>
             const menu = document.querySelector('.btn_open_main');
             const sidebar = document.querySelector('.sidebar');
             menu.addEventListener('click', () => {
                 sidebar.classList.toggle('hidden_sidebar_show')
             })
         </script>