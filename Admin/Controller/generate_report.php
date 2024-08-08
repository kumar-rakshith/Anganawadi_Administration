<?php
  include('../connect.php');
  if(isset($_POST['generate'])){
    
    //USer Defined Variables
    $filename=$_POST['filename'];
    $format=$_POST['format'];

    if($format!='.sql'){

      $setCounter = 0;
       
      $setExcelName = ucfirst($filename)." ";
       
      $setSql = "select * from ".$filename;
       
      $setRec = mysqli_query($con, $setSql);
       
      $setCounter = mysqli_num_fields($setRec);
       
      // for ($i = 0; $i < $setCounter; $i++) {
      //     $setMainHeader .= mysqli_fetch_field($setRec, $i)."t";
      // }
      $setMainHeader = "";
      $setData = "";

      while ($property = mysqli_fetch_field($setRec)) {
          $setMainHeader .= $property->name;
          if($format==".csv"){
            $setMainHeader .= ",";
          }
          else{
            $setMainHeader .= "\t";
          }
      }
      // $setMainHeader .= "\n";

      while($rec = mysqli_fetch_row($setRec))  {
        $rowLine = '';
        foreach($rec as $value)       {
          if(!isset($value) || $value == "")  {
            if($format==".csv"){
              $value = ",";
            }
            else{
              $value = "\t";
            }
          }   
          else  
          {
            $value = strip_tags(str_replace('"', '""', $value));
            // $value = '"' . $value . '"' . "\t";
            if($format==".csv"){
              $value = $value . ",";
            }
            else{
              $value = $value . "\t";
            }
          }
          $rowLine .= $value;
        }
        if($rowLine != ''){
          $setData .= trim($rowLine)."\n";
        }
      }
      $setData = str_replace("\r", "", $setData);
      $setMainHeader = str_replace("\r", "", $setMainHeader);
       
      if ($setData == "") {
        $setData = "No matching records found";
      }
       
      $setCounter = mysqli_num_fields($setRec);
       
       
       
      header("Content-type: application/octet-stream");
       
      header("Content-Disposition: attachment; filename=".$setExcelName." Report ". date('d-m-y').$format);
       
      header("Pragma: no-cache");
      header("Expires: 0");
       
      echo ucwords($setMainHeader)."\n".$setData."\n";
      exit();
    }
    else{

      $mysqlUserName      = "root";
      $mysqlPassword      = "";
      $mysqlHostName      = "localhost";
      $DbName             = "anganawadi";
      $backup_name        = $filename." ".date('d-m-y').".sql";
      $tables             = $filename;

      
      function Export_Database($host,$user,$pass,$name,$filename,  $tables=false, $backup_name=false )
      {
        $mysqli = new mysqli($host,$user,$pass,$name); 
        $mysqli->select_db($name); 
        $mysqli->query("SET NAMES 'utf8'");

        $queryTables = $mysqli->query('SHOW TABLES');
        // while($row = $queryTables->fetch_row()) 
        // { 
        //     $target_tables[] = $row[0]; 
        // }   
        // if($tables !== false) 
        // { 
        //     $target_tables = array_intersect( $target_tables, $tables); 
        // }
        $target_tables[0] = $filename;
        foreach($target_tables as $table)
        {
            $result         =   $mysqli->query('SELECT * FROM '.$table);  
            $fields_amount  =   $result->field_count;  
            $rows_num=$mysqli->affected_rows;     
            $res            =   $mysqli->query('SHOW CREATE TABLE '.$table); 
            $TableMLine     =   $res->fetch_row();
            $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) 
            {
                while($row = $result->fetch_row())  
                { //when started (and every after 100 command cycle):
                    if ($st_counter%100 == 0 || $st_counter == 0 )  
                    {
                            $content .= "\nINSERT INTO ".$table." VALUES";
                    }
                    $content .= "\n(";
                    for($j=0; $j<$fields_amount; $j++)  
                    { 
                        $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); 
                        if (isset($row[$j]))
                        {
                            $content .= '"'.$row[$j].'"' ; 
                        }
                        else 
                        {   
                            $content .= '""';
                        }     
                        if ($j<($fields_amount-1))
                        {
                                $content.= ',';
                        }      
                    }
                    $content .=")";
                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) 
                    {   
                        $content .= ";";
                    } 
                    else 
                    {
                        $content .= ",";
                    } 
                    $st_counter=$st_counter+1;
                }
            } $content .="\n\n\n";
        }
        //$backup_name = $backup_name ? $backup_name : $name."___(".date('H-i-s')."_".date('d-m-Y').")__rand".rand(1,11111111).".sql";
        $backup_name = $filename." ".date('d-m-y').".sql";
        header('Content-Type: application/octet-stream');   
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");  
        echo $content; exit;
      }
      Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,$filename,  $tables=false, $backup_name=false );
    }
  }

?>
