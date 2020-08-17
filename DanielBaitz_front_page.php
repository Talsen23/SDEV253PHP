<<<<<<< HEAD
<?php
$pictures = array('brakes.png', 'headlight.png', 
    'spark_plug.png', 'steering_wheel.png', 
    'tire.png', 'wiper_blade.png', 'car1.png', 'car2.png', 'car3.png');
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
            <div align="center">
        <table style="width: 100%; border: 0">
            <tr>
            <?php
            for ($i = 0; $i < 3; $i++) {
                echo "<td style=\"width: 33%; text-align: center\">
                    <img src=\"";
                echo $pictures[$i];
                echo "\"/></td>";
            }
            ?>
            </tr>
        </table>
        </div>
    </body>
</html>
=======
<?php
$pictures = array('brakes.png', 'headlight.png', 
    'spark_plug.png', 'steering_wheel.png', 
    'tire.png', 'wiper_blade.png', 'car1.png', 'car2.png', 'car3.png');
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
            <div align="center">
        <table style="width: 100%; border: 0">
            <tr>
            <?php
            for ($i = 0; $i < 3; $i++) {
                echo "<td style=\"width: 33%; text-align: center\">
                    <img src=\"";
                echo $pictures[$i];
                echo "\"/></td>";
            }
            ?>
            </tr>
        </table>
        </div>
    </body>
</html>
>>>>>>> 58aabfd3122aa164c27f280fe08796e42bcfb716
