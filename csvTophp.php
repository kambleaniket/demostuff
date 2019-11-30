<?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
     
        include './db_config.php';	
	    $handle = fopen('wishlist-king-by product.csv',"r");
	    $header =1;
	    while (($csvData = fgetcsv($handle)) !== false ){
	    	if($header== 1)
		    {
		        $header++;
		        continue;
		    }
	        $product= $csvData[0];
	        $skui = $csvData[1];
	        $link = $csvData[2];
	        $inWishList = $csvData[3];
	        $customerEmail = $csvData[4];
	       	foreach(preg_split('/\s/', $customerEmail) as $token) {
		        $email = filter_var(filter_var($token, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
		      	if ($email) {
		      		$sql = "INSERT INTO wishlist_data (product, skui, link, inwishlist, email) VALUES('".$product."','".$skui."','".$link."','".$inWishList."','".$email."')";
	     			$query = mysqli_query ($conn, $sql);  

		      	}
		    }
		}
		if ($query){
	        echo "Csv data uploaded Sucessfully.";
	    }else{
	        echo "Error Occured";
	    }    
?>