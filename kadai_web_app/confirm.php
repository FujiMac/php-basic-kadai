<?php
//セッションを開始
session_start();

//POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$dept = $_POST['employee_dept'];

?>

<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <h2>入力内容をご確認ください</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
            <tr>
                <td>項目</td>
                <td>入力内容</td>
            </tr>
            <tr>
                <td>お名前</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $dept; ?></td>
            </tr>
           </table>
        <p>
            <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
            <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        </p>
 </body>
 
 </html>