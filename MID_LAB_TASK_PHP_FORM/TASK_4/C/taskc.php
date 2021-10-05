<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Task Gender</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male"
            <?php
    if(isset($_REQUEST['submit'])){
        $gender = $_REQUEST['gender'];
        if($gender!=""){
            echo $gender." is selected";
        }
        else{
            echo "Invalid Input";
        }
    }
?>
> Male
            <input type="radio" name="gender" value="Female"
            <?php
    if(isset($_REQUEST['submit'])){
        $gender = $_REQUEST['gender'];
        if($gender!=""){
            echo $gender." is selected";
        }
        else{
            echo "Invalid Input";
        }
    }
?>
> Female
            <input type="radio" name="gender" value="Other"
            <?php
    if(isset($_REQUEST['submit'])){
        $gender = $_REQUEST['gender'];
        if($gender!=""){
            echo $gender." is selected";
        }
        else{
            echo "Invalid Input";
        }
    }
?>
> Other
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">

        </fieldset>
    </form>
</body>

</html>