<?php 
//print_r($_POST);
if(isset($_POST['submits']))
	{
		$name=$_POST['names']?$_POST['names']:"NULL";
		$pass=$_POST['passwords']?$_POST['passwords']:"NULL";
		$age=$_POST['ages']?$_POST['ages']:"NULL";
		$email=$_POST['emails']?$_POST['emails']:"NULL";
		$gender=isset($_POST['genders'])?$_POST['genders']:"NULL";
		$country=$_POST['countrys']?$_POST['countrys']:"NULL";
		$file=isset($_POST['files'])?$_POST['files']:"NULL";
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['pass']=$pass;
		$_SESSION['age']=$age;
		$_SESSION['email']=$email;
		$_SESSION['gender']=$gender;
		$_SESSION['country']=$country;

		if($_FILES){
        $target_dir= "uploads/";
        $main_file_name = $_FILES["files"]["name"];
        $main_file_name_size = $_FILES["files"]["size"];
        $target_file = $target_dir . basename($main_file_name);
        $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $temp_file_name = $_FILES["files"]["tmp_name"];
        $target_temp_file = $target_dir . basename($temp_file_name);
      
        $finalpath = $target_dir.$main_file_name;
        if(file_exists($finalpath)){
            $file1_name = $name."_".time().".".$ext;
            $finalpath = $target_dir.$file1_name;
        }
        (move_uploaded_file($temp_file_name,$finalpath)) ? "file successfully uploaded" : "unable to upload file";
        $_SESSION["filep"]=$finalpath;
        $_SESSION["filen"]=$main_file_name;
        }
        //echo "correct";
        //header("refresh:0;url=display.php");
	}
else
	echo "No inputs ";


//using curl
$curl =curl_init();
curl_setopt($curl,CURLOPT_URL,'http://localhost/practice/day_2/api.php' );
	$result=curl_exec($curl);
	
		echo $result;echo "<br>";//stores api array as jsons
//decode json in array
curl_setopt($curl,CURLOPT_URL,'http://localhost/practice/day_2/dejasonapi.php' );
	$result1=curl_exec($curl);
	echo $result1;echo "<br>";

//task 4

	/*$arr1=array('a','b','c');
	$url = 'http://www.example.com/api';
	$enarr1=json_encode($arr1);
	//$payload = json_encode(array("user" => $data));

	//send json file and get response*/
	curl_setopt($curl, CURLOPT_URL, "http://localhost/practice/day_2/api.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $result);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $result2 = curl_exec($curl);
    echo $result2;echo "<br>";

//task 5
    $enpost=json_encode($_POST);
    curl_setopt($curl, CURLOPT_URL, "http://localhost/practice/day_2/newapi.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $enpost);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $result3 = curl_exec($curl);
    echo $result3;echo "<br>";


 ?>




