<?php
$row = 1;
if (($handle = fopen('wishlist-king-by product.csv', "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        $the_big_array = [];
        for ($c=0; $c < $num; $c++) {
            // echo $data[$c] . "<br />\n";
            $the_big_array = $data[$c];
            echo $the_big_array;

            

        }

    }
    // print_r($the_big_array);
    fclose($handle);
}
?>