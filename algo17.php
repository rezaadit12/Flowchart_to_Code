<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 17</title>
</head>
<body>

    <form action="" method="post">
        <?php for($a = 0 ; $a <= 20; $a++): ?>
            <input type="number" name="bilangan<?= $a ?>" placeholder="Input Bilangan"><br>
        <?php endfor;?>
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
        $number = []; 
        $max = 0;
        $min = 0; 
        $sum = 0; 
        $count = 0; 
        
        if(isset($_POST['submit'])){
            for($a = 0 ; $a <= 20; $a++){
                if(isset($_POST["bilangan$a"])){
                    $input_number = intval($_POST["bilangan$a"]);
                    array_push($number, $input_number);
                    $max = max($max, $input_number);
                    $min = min($min, $input_number);
                    $sum += $input_number;
                    $count++;
                }
            }
        }
        
    if($count > 0) {
        $average = $sum / $count;
        echo "Bilangan Terbesar: $max<br>";
        echo "Bilangan Terkecil: $min<br>";
        echo "Rata-rata Bilangan: $average<br>";
    }
    ?>
</body>
</html>
