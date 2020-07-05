<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">

    <input type="number" id="number" name = "num" value="50"><br>

    <input type="radio" id="equal" name="guess" value="equal">
    <label for="equal">Bạn đã đoán đúng</label><br>
    <input type="radio" id="big" name="guess" value="big">
    <label for="big">Không, số tôi đoán lớn hơn</label><br>
    <input type="radio" id="small" name="guess" value="small">
    <label for="small">Không, số tôi đoán nhỏ hơn</label>
    <br>
    <br>
    <input type="submit" value="Submit">



</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $guess = $_GET['guess'];
        $num = $_GET['num'];
        if($guess == 'equal') {
            echo "Bạn đã đoán đúng số.";
            echo "$num";
            return;
        } else if ($guess == 'big') {
            $start = $num;
            $end = 100;
            $mid =  floor(($start + $end)/2);
?>
           <script>
                document.getElementById('number').value = <?php echo (int) $mid; ?>;
           </script>

<?php
           
            
        } else {
            $start = 0;
            $end = $_GET['num'] - 1;
            $mid =  floor(($start + $end)/2);
?>
           <script>
                document.getElementById('number').value = <?php echo $mid; ?>;
           </script>

<?php
        }

        var_dump($_GET);
    }

?>

</body>
</html>



































































