<?php
function convert_to_meters($value, $from_unit){
    if($from_unit == 'feet'){
        return $value * 0.3048;
    }
    return "Unsupported Unit.";
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if($_POST['submit']){
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    $to_value = convert_to_meters($from_value, $from_unit);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Convert Length</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <div id="main-content">

        <h1>Convert Length</h1>

        <form action="" method="post">

            <div class="entry">
                <label>From:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value ?>" />&nbsp;
                <select name="from_unit">
                    <option value="inches"<?php if($from_unit === 'inches'){echo ' selected';}?>>Inches</option>
                    <option value="feet"<?php if($from_unit === 'feet'){echo ' selected';}?>>Feet</option>
                    <option value="yards"<?php if($from_unit === 'yards'){echo ' selected';}?>>Yards</option>
                    <option value="miles"<?php if($from_unit === 'miles'){echo ' selected';}?>>Miles</option>
                    <option value="millimeters"<?php if($from_unit === 'millimeters'){echo ' selected';}?>>Millimeters</option>
                    <option value="centimeters"<?php if($from_unit === 'centimeters'){echo ' selected';}?>>Centimeters</option>
                    <option value="meters"<?php if($from_unit === 'meters'){echo ' selected';}?>>Meters</option>
                    <option value="kilometers"<?php if($from_unit === 'kilometers'){echo ' selected';}?>>Kilometers</option>
                </select>
            </div>

            <div class="entry">
                <label>To:</label>&nbsp;
                <input type="text" name="to_value" value="<?php echo $to_value ?>" />&nbsp;
                <select name="to_unit">
                    <option value="meters"<?php if($to_unit === 'meters'){echo ' selected';}?>>Meters</option>
                </select>

            </div>

            <input type="submit" value="Submit" name="submit"/>
        </form>

        <br />
        <a href="index.php">Return to menu</a>

    </div>
    </body>
</html>
