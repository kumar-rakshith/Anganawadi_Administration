<?php

 define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

$searchq = $_GET['q'];
//select values from empInfo table
$data="SELECT * FROM register where name like '".$searchq."%' or dob like '".$searchq."%'" ;
 
$val=$admin->ret($data);    

echo '<div class="row">';  
    while($row = $val->fetch(PDO::FETCH_ASSOC)){
    	echo '<div class="col-md-4">
    					ID: '.$row['id'].'<br>
						Name: '.$row['name'].'<br>
						EmailID: '.$row['email'].'<br>
						DOB: '.$row['dob'].'<br>
						Phone: '.$row['phone'].'<br>
						Place: '.$row['place'].'<br>
						Gender: '.$row['gender'].'<br>
						password: '.$row['password'].'<br>
						
					
						</div>';
						}

						echo '</div>'; ?>

    

