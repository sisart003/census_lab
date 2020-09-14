


<?php
// used to connect to the database
$host = "localhost";
$db_name = "census";
$username = "root";
$password = "";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}


$query = "SELECT * FROM census_lab";



$stmt = $con->prepare($query);
// execute query
$stmt->execute();

// get total rows
if($data = $stmt->fetchall(PDO::FETCH_ASSOC))
{
      $db_columns = array_keys($data[0]);
      unset($db_columns[0]); // remove the patient id in the columns
      $collections = array();
      foreach($db_columns as $column)
      {
            $collections[$column]['male'] = 0;
            $collections[$column]['female'] = 0;
      }

      $opd_male_total = 0;
      $opd_female_total = 0;
      foreach($data as $record)   
      {     
            foreach($record as $key => $string_value)
            {
                  if(in_array($key,array('patient_id','h_o_non')))
                  {
                        continue;
                  }

                  $exploded_string = explode('_',$string_value);

                  if(in_array('male',$exploded_string))
                  {
                        if(isset($exploded_string['opd']))
                        {
                                $opd_male_total++;
                        }
                        $collections[$key]['male']++;
                  }
                  else if(in_array('female',$exploded_string))
                  {
                         if(isset($exploded_string['opd']))
                        {
                                $opd_female_total++;
                        }
                         $collections[$key]['female']++;
                  }
            }
      }
      echo json_encode($collections);
}

?>
