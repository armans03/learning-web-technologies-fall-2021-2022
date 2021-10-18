<?php
$myfile = fopen('user.txt', 'r');
$counter = 0;

while (!feof($myfile)) {
    $data = fgets($myfile);
    if ($data != "") {
        $user = explode('|', $data);
        if (++$counter == $id) {
            echo '
            <html>
                <body>
                    <form method="post" action="changepwcheck.php?id=' . $id . '">
                        <fieldset>
                            <legend>CHANGE PASSWORD</legend>
                            <table>
                                <tr>
                                    <td>Current Password:</td>
                                    <td><input type="password" name="password" value="' . $user[1] . '"></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" value="' . $user[1] . '"></td>
                                </tr>
                                <tr>
                                    <td> New Password:</td>
                                </tr>
                                 <tr>
                                    <td><input type="password" name="password" value="' . $user[1] . '"></td>
                                </tr>
                                <tr>
                                    <td> New Password:</td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" value="' . $user[1] . '"></td>
                                </tr>


                                <tr>
                                    <td><input type="submit" name="submit" value="Submit"></td>
                                    <td><a href="adminIndex.php">Home</a></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </body>
            </html>
            ';
        }
    }
}


fclose($myfile);
?>