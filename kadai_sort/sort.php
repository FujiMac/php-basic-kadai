<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
         function sort_2way($array,$order){
            
            if($order==='true'){
                echo '昇順にソートします。<br>';
                asort($array);
                foreach($array as $key => $val){
                    echo $val.'<br>';
                }
            }else{
                echo '降順にソートします。<br>';
                arsort($array);
                foreach($array as $key => $val){
                    echo $val.'<br>';
                }  
            }
         }

        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums,'true');
        sort_2way($nums,'false');

        ?>
    </p>
</body>

</html>