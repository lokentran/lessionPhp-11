<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">

    <input type="number" name="getNumber" id="">
    <br>
    <br>
    <input type="submit" name="sbm" value="Submit">

</form>


<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['getNumber'];
        $str = $num[0].$num[1].$num[2];

        switch ($str) {
            case '098':
            case '097':
            case '099':
            case '096':
                echo "SĐT thuộc mạng Viettel.";
                break;
            case '090':
            case '093':
                echo "SĐT thuộc mạng Viettel.";
                break;
            case '091':
            case '092':
                echo "SĐT thuộc mạng Viettel.";
                break;
            
            default:
                echo "Không xác định được nhà mạng";
                break;
        }
    }


?>










</body>
</html>