<?php
require ('connect.php');
global $collectionDataBase;
mysqli_set_charset($collectionDataBase, "UTF8");


@$nameuser01=$_POST['nameuser'];
@$job02=$_POST['job'];

if(isset($_POST['btAdd'])){
    $addData = "INSERT INTO users (nameuser,job) VALUES ('$nameuser01','$job02')";
    if(mysqli_query($collectionDataBase,$addData)){
        echo "doneUpload data..";

    }
    else{
        echo "Upload invalid";
    }

    echo "lool";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <div class="divParent">
    <div class="divAdd">

        <form action="index.php" method="post">
            <input type="text" placeholder="الاسم" name="nameuser"/>
            <br>
            <br>
            <input type="text" placeholder="العمل" name="job"/>

            <br> 
            <br>
            <button  name="btAdd">أضافة </button>
        </form>

    </div>
        
    </div>
</body>
</html>