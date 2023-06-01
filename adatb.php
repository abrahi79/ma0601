<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adatbáziskezelés</h1>
    <?php
    $kapcsolat=new mysqli('localhost','root','','mozi');
    if (!$kapcsolat->connect_errno)
            print("A kapcsolat megvalósult!");

   $result=$kapcsolat->query("SELECT * FROM `vendeg` WHERE nev='Fehér Adél'");
   
   print("<pre>");
   print_r($result);
   print("</pre>");


   if ($kapcsolat->query("SELECT * FROM `vendeg` WHERE nev='Fehér Adél'"))
        {
            $tomb=$result->fetch_all(MYSQLI_BOTH);
            print("<pre>");
            print_r($tomb);
            print("</pre>");

            foreach ($tomb as $ertek)
                {
                    print("<br>");
                    foreach ($ertek as $kulcs)
                        print($kulcs." ");
                }

        }
    $result->free();

    




    ?>

</body>
</html>