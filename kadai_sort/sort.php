<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        
        $nums = [15, 4, 18, 23, 10 ];
        $array = $nums;
        $order = true;
        
    
        function sort_2way($array, $order) {
            
            if ($order === true) {
                echo "昇順にしました。<br>";
                sort ($array);
                    foreach($array as $num) {
                        echo $num . '<br>';
                    }
            }else {
                echo "降順にしました。<br>";
                rsort ($array);
                    foreach ($array as $num) {
                        echo $num . '<br>';         
                    }  
            }
      }

      sort_2way($array, true);
      sort_2way($array, false);
    



        ?>
    </p>
</body>

</html>
