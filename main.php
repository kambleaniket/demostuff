<?php
 	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include 'db_config.php';

	$sql = "SELECT * FROM wishlist_data";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);
	if (mysqli_num_rows($result) > 0) {	
	    // output data of each row
	    while($row = mysqli_fetch_array($result)) {
	          // echo "id: " . $row["id"]. " - skui: " . $row["skui"]."<br>";

	           //	$id = array();
	           	$id = $row["id"];

	           	$sql1 = "SELECT * FROM products";
				$result1 = mysqli_query($con, $sql1);
				$count = mysqli_num_rows($result1);

				if (mysqli_num_rows($result1) > 0) {

					while($row1 = mysqli_fetch_array($result1)) {
                        
                        $array = array();
                        $array = $row1;

                        if ($row["skui"] == $array["skui"]) {
                        	//echo "id: " . $row1["id"]. " - product_id: " . $row1["productid"]." - variant_id: " . $row1["variantid"]." - skui: " . $row1["skui"]."<br>";
                        	$pid = $row1["productid"];
                        	$vid = $row1["variantid"];

                        	$sql = "UPDATE temp SET productid='$pid',variantid='$vid' WHERE id='".$id."'";

							if (mysqli_query($con, $sql)) {
							    echo "Record updated successfully";
							} else {
							    echo "Error updating record: " . mysqli_error($conn);
							}	

                        }

					}

				}
	    }
	} else {
	    echo "0 results"; 
    }

               
    


?>