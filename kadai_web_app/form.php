<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="employee_dept">
                        <option>開発部</option>
                        <option>営業部</option>
                        <option>人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" vaule="送信">
    </form>
 </body>
 
 </html>