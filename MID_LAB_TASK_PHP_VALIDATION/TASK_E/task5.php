<html>

<head>
    <title>TASK DEGREE</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="ssc" value="SSC"> SSC
            <input type="checkbox" name="hsc" value="HSC"> HSC
            <input type="checkbox" name="bsc" value="BSc"> BSc
            <input type="checkbox" name="msc" value="MSc"> MSc
        <hr>
        <input type="submit" name="submit" value="Submit">
        <br>
            <?php
            if (isset($_REQUEST['submit'])) {
                $selectedCOunt = 0;
                $selectedCOunt += isset($_REQUEST['ssc'])?1:0;
                $selectedCOunt += isset($_REQUEST['hsc'])?1:0;
                $selectedCOunt += isset($_REQUEST['bsc'])?1:0;
                $selectedCOunt += isset($_REQUEST['msc'])?1:0;
                
                if($selectedCOunt<2){
                    echo 'Select Atleast Two';
                    return;
                }
                echo 'Submitted';
            }
            ?>
        </fieldset>
    </form>
</body>

</html>