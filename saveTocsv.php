  <?php  
         
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=savetocsv.csv'); 

      
      include 'db_config.php';
      $output = fopen("php://output", "w"); 
      $header = 0; 
      fputcsv($output, array( 'Product', 'Skui', 'Link', 'Inwishlist','Email','ID'));  
      $query = "SELECT * FROM  wishlist_data";
      $result = mysqli_query($conn, $query); 
      while($row = mysqli_fetch_row($result))  
      {  
            if ($header == 0 ) {
            	$header = 1;
            	
            }
            fputcsv($output, $row);  
            print_r($row);
      }  
      fclose($output);  
   
 ?>  