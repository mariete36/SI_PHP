<?php
require_once "init_db.php";

session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>OTAKOON</title>
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
   <div class="container">
      <header class="header">
         <div class="headerContainer">
            <a href="index.php"><img class="logo" src="image/logo.png" alt="logo"></a>
            <div class="mainMenu">
               <div class="sign">
                  <a href="admin.php">admin_panel</a>
                  <a href="sign_in.php">sign_in</a>
               </div>
               <nav class="mainNav">
                  <a class="mainNav_link" href="#">anime</a>
                  <a class="mainNav_link" href="#">manga</a>
                  <a class="mainNav_link" href="#">ma liste</a>
               </nav>
            </div>
         </div>
      </header>

       <div class="animeList_read">
           <table>
               <tr>
                   <th>picture</th>
                   <th>name</th>
                   <th>genre</th>
                   <th>year</th>

               </tr>

               <?php
               /* on utilise SELECT pour selectionner les noms des données et FROM pour indiquer depuis quelle table.*/
               $sql = "SELECT
            id,
            name,
            genre,
            url,
            year
          FROM
            anime
        ;";
               $stmt = $conn->prepare($sql);
               $stmt->execute();
               ?>
               <?php
               /* parcourt le tableau donné par fetch et affiche un tr tant qu'il trouve une ligne dans la table. */
               while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                   <tr>
                       <td class="animeList_tdPicture"><div class="animeList_imgContainer"><img src="uploads/<?=$row["id"].'.'.$row["url"]?>" alt="<?=$rom["id"]?>"></div></td>
                       <td><a href="anime_description.php?id=<?=$row["id"]?>"><?=$row["name"]?></a></td>
                       <td><?=$row["genre"]?></td>
                       <td><?=$row["year"]?></td>

                   </tr>
               <?php endwhile;?>

           </table>
       </div>


   </div>



</html>
