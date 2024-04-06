 <html>
 <head>
 <title>Math Functions</title>
 </head>
 <body>
 <h4><u>MATH FUNCTIONS</u></h4>
    <h5>1.POW()</h5>
    <?php
    echo pow(4, 3);
    ?>

    <h5>2.SQRT()</h5>
    <?php
    echo sqrt(1.5);
    ?>

    <h5>3.ROUND()</h5>
    <?php
    echo round(3.6) . "<br>";
    echo round(7.4) . "<br>";
    echo round(4.5);
    ?>

    <h5>4.FLOOR()</h5>
    <?php
    echo floor(13.8) . "<br>";
    echo floor(15.2);
    ?>

    <h5>5.CEIL()</h5>
    <?php
    echo ceil(27.9) . "<br>";
    echo ceil(41.4);
    ?>

    <h5>6.MAX()</h5>
    <?php
    echo max(13, 56, 1, 90, 178, 14) . "<br>";
    echo max(-45, -90, -23, -1, -67);
    ?>

    <h5>7.MIN()</h5>
    <?php
    echo min(19, 36, 7, 90, 0, 12) . "<br>";
    echo min(-67, -23, -56, -17, -3);
    ?>

    <h5>8.RANDOM()</h5>
    <?php
    echo rand(1, 50) . "<br>";
    ?>

    <h5>9.DECIMAL TO BINARY()</h5>
    <?php
    echo decbin(10);
    ?>

    <h5>10.BINARY TO DECIMAL()</h5>
    <?php
    echo bindec(1000);
    ?>

    <h5>11.LOG</h5>
    <?php
    echo log(10);
    ?>

    <h5>12.ABS()</h5>
    <?php
    echo abs(-19.6) . "<br>";
    echo abs(78.4);
    ?>

    <h5>13.EXP()</h5>
    <?php
    echo exp(3);
    ?>
	</body>
	</html>