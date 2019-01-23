<?php
    $pictures = array(
            "1.jpg",
            "2.jpg",
            "3.jpg",
            "4.jpg",
            "5.jpg",
            "6.jpg",
            "7.jpg",
            "8.jpg",
            "9.jpg"
    );
    shuffle($pictures);
?>

<html>
    <head>
        <title>Bob's Auto Parts</title>
    </head>
    <body>
        <h1>Bob's Auto parts</h1>
        <div>
            <table width="100%">
                <tr>
                    <?php
                    for($i=0;$i<3;$i++){
                        echo "<td align='center'><image src='images/$pictures[$i]'></td>";//可以不用在同一个目录下面
                    }
                    ?>
                </tr>
            </table>
        </div>
    </body>
</html>
