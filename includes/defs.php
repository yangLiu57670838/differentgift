<?php

include "db_defs.php";

define("MAX_WIDTH", 200);
define("MAX_HEIGHT", 200);

function allproducts() {

    $connection = mysql_open();
	   $query = "select * from products";
	   $results = mysql_query($query, $connection) or show_error();
	   $products = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $products[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $products;



}

function getFeedback() //get all feedback information
{
     $connection = mysql_open();
	   $query = "select * from feedback";
	   $results = mysql_query($query, $connection) or show_error();
	   $feedback = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $feedback[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $feedback;
}

function addFeedback($name, $comment, $time) //add comments into feedback table
{
        $name = mysql_escape_string($name);
        $comment = mysql_escape_string($comment);

    $connection = mysql_open();

    $query = "insert into feedback (comment, name, time) " .
             "values ('$comment', '$name', '$time')";
    $results = mysql_query($query,$connection) or show_error();
    

    
    mysql_close($connection) or show_error();
}

function getLastTenRecord() //get last ten record rows from record table
{
    	  $connection = mysql_open();
	   $query = "SELECT * FROM record ORDER BY record_id DESC LIMIT 10";
	   $results = mysql_query($query, $connection) or show_error();
	   $records = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $records[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $records;
	
}

function recordingVisitor($ipAddress, $time)  //record the last ten visitors
{
        $connection = mysql_open();

    $query = "insert into record (time, ip) " .
             "values ('$time', '$ipAddress')";
    $results = mysql_query($query,$connection) or show_error();
    

    
    mysql_close($connection) or show_error();
}


function get_offset($p)
{
   $items_per_page = 5;
   $offset = ($p - 1) * $items_per_page;
   return $offset;

}

function getCategories()
{
          
   
	  $connection = mysql_open();
	   $query = "select * from categories";
	   $results = mysql_query($query, $connection) or show_error();
	   $categories = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $categories[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $categories;

}

function getusers()
{
          
   
	  $connection = mysql_open();
	   $query = "select * from users";
	   $results = mysql_query($query, $connection) or show_error();
	   $users = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $users[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $users;

}


function delete_category($id)
{
     $connection = mysql_open();
	 $query = "delete from categories where c_id = $id";
	 $results = mysql_query($query,$connection) or show_error();
	 
	 
     mysql_close($connection) or show_error();
	 
}

function delete_product($id)
{
     $connection = mysql_open();
	 $query = "delete from products where p_id = $id";
	 $results = mysql_query($query,$connection) or show_error();
	 
	 
     mysql_close($connection) or show_error();
	 
}


function add_category($category) {
  
    $category = mysql_escape_string($category);
    

    $connection = mysql_open();

    $query = "insert into categories (c_name) " .
             "values ('$category')";
    $results = mysql_query($query,$connection) or show_error();
    

    
    mysql_close($connection) or show_error();
}




function checkDuplicateC($category) {

  $connection = mysql_open();
  $query = "SELECT * FROM categories WHERE categories.c_name = '$category'";
  $result = mysql_query($query, $connection) or show_error();
  if (mysql_num_rows($result) == 1) 
  {
     
     mysql_close($connection) or show_error();
	return true; 
  }
   else 
	{
	 mysql_close($connection) or show_error();
	 
	  return false;
	 
	}


}

function getuserNames($q)
{
     
	  $connection = mysql_open();
	  $username = trim(strtolower($q));
      $username = mysql_escape_string($username);


	   $query = "select * from users where userName = '$username' LIMIT 1 ";
	   $results = mysql_query($query, $connection) or show_error();
$num = mysql_num_rows($results);


	     mysql_close($connection) or show_error();
     return $num;


}


function getproducts($categoryname) {

    $connection = mysql_open();
	   $query = "select * from products where category = '$categoryname'";
	   $results = mysql_query($query, $connection) or show_error();
	   $products = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $products[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $products;



}

function get_productDetail($id)
{
 
	    $connection = mysql_open();
	$query = "select * from products where products.p_id = $id";
	$result = mysql_query($query,$connection) or show_error();
	
	if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	
	$product = mysql_fetch_array($result);
	  mysql_close($connection) or show_error();
	  
	  
	return $product;
	
}

function getallproducts($offset) {
	  $connection = mysql_open();
	     $items_per_page = 5;
	   $query = "select SQL_CALC_FOUND_ROWS * from products order by p_id limit $offset, $items_per_page";
	   $results = mysql_query($query, $connection) or show_error();
	   	$q = "select FOUND_ROWS()";
	$result2 = mysql_query($q, $connection) or show_error();
	  $row = mysql_fetch_array($result2);
$num_items = $row[0];
	   $allproducts = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $allproducts[] =$row;
	   }

	     mysql_close($connection) or show_error();
     	return array($allproducts, $num_items);

}
function getallEproducts() {
	  $connection = mysql_open();
	   $query = "select * from products where p_type = 'etched'";
	   $results = mysql_query($query, $connection) or show_error();
	   $allEproducts = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $allEproducts[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $allEproducts;

}

function getallSproducts() {
	  $connection = mysql_open();
	   $query = "select * from products where p_type = 'special'";
	   $results = mysql_query($query, $connection) or show_error();
	   $allSproducts = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $allSproducts[] =$row;
	   }

	     mysql_close($connection) or show_error();
     return $allSproducts;

}

function getoriginalCode() {
     $connection = mysql_open();
	   $query = "select code from code";
    $result = mysql_query($query,$connection) or show_error();

    if (mysql_num_rows($result) != 1) {
        echo "there are no original code has been set before.. \n";
        die();
    }
	
    $code = mysql_fetch_array($result);
    mysql_close($connection) or show_error();
    return $code;


}

function update_code($code){
$connection = mysql_open();
	   $query = "update code set code = '{$code}'";
		 $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();


}



function update_detail($id,$name,$price,$code,$state,$detail,$image,$type,$category) {
       
	   $image_details = process_uploaded_image_file($image);
	   $connection = mysql_open();
	   if (empty($image_details))
	   {
	      $query = "update products set p_type = '{$type}', category = '{$category}', p_name = '{$name}', price = '{$price}', code = '{$code}', state = '{$state}', detail = '{$detail}' where p_id = $id";
	   
	   }
	    else
		{
		    list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "update products set p_type = '{$type}', category = '{$category}', p_name = '{$name}', price = '{$price}', code = '{$code}', state = '{$state}', detail = '{$detail}', imagedata =  '{$imagedata}', imagename = '{$imagename}', imagetype = '{$imagetype}', imagesize = '{$imagewidthheight}' where p_id = $id";
		
		}
		 
		 $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();


}
function createAccount($password, $userName, $email, $phone, $postCode)
{
$connection = mysql_open();

   	  
   $userName = mysql_escape_string(trim(strtolower($userName)));
    $password = mysql_escape_string($password);
	 $email = mysql_escape_string($email);
	 $phone = mysql_escape_string($phone);
	  $postCode = mysql_escape_string($postCode);
	  
	  $query = "select * from users where userName = '$userName' LIMIT 1 ";
	   $results = mysql_query($query, $connection) or show_error();
$num = mysql_num_rows($results);
	  
	  	    if(($userName == "") || (strlen($userName) < 3) || ($num == 1))
		{
		   mysql_close($connection) or show_error();
	       return false;
		}
		else 
		{
	  

		  $password = crypt($password, substr($userName, 0, 2));
		  $insert = "insert into users(password, userName, email, phone, postCode) " .
		  "values ('$password', '$userName', '$email', '$phone','$postCode')";
	$result = mysql_query($insert, $connection);
	mysql_close($connection) or show_error();
	return $result;
	
	}



}

function auth($userName, $password)
{
  if (! isset($userName) || ! isset($password))
    return false;
	
    $connection = mysql_open();
	$userName = mysql_escape_string(trim(strtolower($userName)));
	$password = mysql_escape_string($password);
	
	$query = "select * from users where userName = '$userName'";
	$result = mysql_query($query, $connection) or show_error();
	if(mysql_num_rows($result) == 1)
	{
	  $user = mysql_fetch_array($result);
      $salt =substr($userName, 0, 2);
	  $encryptedPassword = crypt($password, $salt);
	    if($encryptedPassword != $user[5])
		{
		   mysql_close($connection) or show_error();
	       return false;
		}
		else 
		{
		   mysql_close($connection) or show_error();
		   return true;
		}

	}
	else
	{
	  mysql_close($connection) or show_error();
	  return false;
	}


}

function add_detail($name,$price,$code,$state,$detail,$type,$category,$image) {


$name = mysql_escape_string($name);
$price = mysql_escape_string($price);
$code = mysql_escape_string($code);
$state = mysql_escape_string($state);
$detail = mysql_escape_string($detail);
$type = mysql_escape_string($type);
$category = mysql_escape_string($category);

 $image_details = process_uploaded_image_file($image);
     $connection = mysql_open();
	 
	if (empty($image_details))
	   {
	      
    $query = "insert into products(p_name, price, code, state, detail, p_type, category) values ('$name', '$price', '$code', '$state', '$detail', '$type', '$category')";
   $results = mysql_query($query,$connection) or show_error();

    
    mysql_close($connection) or show_error();
	   
	   }
	    else
		{
		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into products (p_name, price, code, state, detail, p_type, category, imagedata, imagename, imagetype, imagesize) values ('$name', '$price', '$code', '$state', '$detail', '$type', '$category', '$imagedata', '$imagename', '$imagetype', '$imagewidthheight')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		
		}
		
 
	
}
	

function addImage($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}

function addImage2($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage2";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage2 (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}

function addImage3($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage3";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage3 (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}

function addImage4($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage4";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage4 (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}

function addImage5($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage5";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage5 (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}

function addImage6($image)
{
  $image_details = process_uploaded_image_file($image);
   $connection = mysql_open();
   if (empty($image_details))
	   {
	      header("Location: manageScrolling.php"); 
          exit;
	   
	   }
	    else
		{
		   
             $q = "TRUNCATE TABLE scrollingImage6";
			 $result = mysql_query($q,$connection) or show_error();

		   list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "insert into scrollingImage6 (imagedata, imagename, imagetype, imagesize) values ('{$imagedata}', '{$imagename}', '{$imagetype}', '{$imagewidthheight}')";
		      $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
		}

}


function process_uploaded_image_file($image) {
  
  if (!is_uploaded_file($image['tmp_name']) || $image['size'] == 0) 
  {
    return NULL;
  } 

  $imagedata = addslashes(file_get_contents($image['tmp_name']));
  $imagename = addslashes(basename($image['name']));
  $imagesize = getimagesize($image['tmp_name']); 
  $imagewidthheight = addslashes($imagesize[3]); 
  $imagetype = $imagesize['mime'];

  // Check file is a JPEG!! important
  if ($imagetype != "image/jpeg") {
    return NULL;
  }



  
  // shouldn't reuse name tmp.jpg repeatedly after resize
  if ($imagesize[0] > MAX_WIDTH || $imagesize[1] > MAX_HEIGHT) //if necessary to resize
  {

      resize_image_file($image['tmp_name'], "images/tmp.jpg", 
                        MAX_WIDTH, MAX_HEIGHT);
      list($width,$height) = getimagesize("images/tmp.jpg");
      $imagedata = addslashes(file_get_contents("images/tmp.jpg")); //new image data
      $imagewidthheight = "width=\"$width\" height=\"$height\"";
  }


  return array($imagedata, $imagename, $imagetype, $imagewidthheight);
}
  
  function resize_image_file($src_file, $dst_file, $width, $height) {
  // Compute new dimensions
  list($width_orig, $height_orig) = getimagesize($src_file);  //assign value by list()
    
  $ratio_orig = $width_orig/$height_orig;
  
  if ($width/$height > $ratio_orig) {
     $width = $height*$ratio_orig;
  } else {
     $height = $width/$ratio_orig;
  }
  
  // Resample $srcfile
  $image_p = imagecreatetruecolor($width, $height);
  $image = imagecreatefromjpeg($src_file);
  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
  
  // Output resized image to $dst_file
  imagejpeg($image_p, "$dst_file", 100);
}  


function getImage()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  
  
function getImage2()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage2";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  

function getImage3()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage3";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  

function getImage4()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage4";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  

function getImage5()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage5";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  

function getImage6()
{
   $connection = mysql_open();
 
  $query = "select * " .
           "from scrollingImage6";
    $result = @ mysql_query($query,$connection) or show_error();
  
  $row = mysql_fetch_array($result);

	  
	 
		  mysql_close($connection) or show_error();

  return $row;
}  

function search($search) {
    

	$connection = mysql_open();

	$q = "select * from categories";
	if ($search)
	{
	     $q .= " where c_name like '%$search%'";
	}
	

	

	$results = mysql_query($q, $connection) or show_error();
	$q = "select FOUND_ROWS()";
	$result2 = mysql_query($q, $connection) or show_error();


	$items = array();
	while ($row = mysql_fetch_array($results))
	{
	         $items[] = $row;
	}
	
	return $items;
}


function get_job_title_from_employer($id)
{
    $connection = mysql_open();
	$query = "select j_id, title from jobs2 where e_id = $id";
	$results = mysql_query($query,$connection) or show_error();


	$jobs2 = array();
	 if (mysql_num_rows($results) == 0)
	 {
	       $error = "no jobs2 from this employer right now";
		  
	 }
	 else
	 {
	    while ($row = mysql_fetch_array($results))
	       {
	         $jobs2[] = $row;
			 $error = "";
	       }
	 }
	return array($jobs2, $error);
}

function get_employerDetail($id)
{
 
	    $connection = mysql_open();
	$query = "select * from employers2 where employers2.e_id = $id";
	$result = mysql_query($query,$connection) or show_error();
	
	if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	
	$employer = mysql_fetch_array($result);
	  mysql_close($connection) or show_error();
	  
	  
	return $employer;
	
}

function getApplicationDetail($applicant)
{
   $connection = mysql_open();
	$query = "select job, letter, unix_timestamp(date) as date from application where applicant = '{$applicant}'";
	$result = mysql_query($query,$connection) or show_error();
	
	if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	
	$applicationDetail = mysql_fetch_array($result);
	$epoch = $applicationDetail["date"];
	  mysql_close($connection) or show_error();
	  
	  
	return array($applicationDetail, $epoch);

}






function get_item($id) {
    $connection = mysql_open();

    $query = "select employers2.e_id, employers2.name, unix_timestamp(jobs2.time) as time, jobs2.j_id, jobs2.title, jobs2.location, jobs2.description, jobs2.salary from employers2, jobs2 where jobs2.j_id = $id and employers2.e_Id = jobs2.e_Id";
    $result = mysql_query($query,$connection) or show_error();

    if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	
    $item = mysql_fetch_array($result);
   $epoch = $item["time"];
    mysql_close($connection) or show_error();
    return array($item, $epoch);
}

function get_final_date($id) {
    $connection = mysql_open();

    $query = "select employers2.e_id, employers2.name, unix_timestamp(jobs2.finalApply) as finalApply, jobs2.j_id, jobs2.title, jobs2.location, jobs2.description, jobs2.salary from employers2, jobs2 where jobs2.j_id = $id and employers2.e_Id = jobs2.e_Id";
    $result = mysql_query($query,$connection) or show_error();

    if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	
    $item = mysql_fetch_array($result);
   $epoch = $item["finalApply"];
    mysql_close($connection) or show_error();
    return $epoch;
}




function get_employers2()
{
       $connection = mysql_open();
	   $query = "select e_id, name from employers2";
	   $results = mysql_query($query, $connection) or show_error();
	   $employers2 = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $employers2[] =$row;
	   }

     return $employers2;
}

function add_job($title,$location,$description,$salary,$id) {
  
    $title = mysql_escape_string($title);
	$location = mysql_escape_string($location);
	$description = mysql_escape_string($description);
	$salary = mysql_escape_string($salary);
	$id = mysql_escape_string($id);
    

    $connection = mysql_open();
    $epoch = time();

    $query = "insert into jobs2 (title,description,location,salary,e_id,time) " .
             "values ('$title','$description', '$location', '$salary', '$id',from_unixtime($epoch))";
    $results = mysql_query($query,$connection) or show_error();
    $id = mysql_insert_id();                 /*Get the ID generated in the last query*/
    
    mysql_close($connection) or show_error();
    return $id;
}


function delete_job($id)
{
     $connection = mysql_open();
	 $query = "delete from jobs2 where j_id = $id";
	 $results = mysql_query($query,$connection) or show_error();
	 
	 
     mysql_close($connection) or show_error();
	 
}

function getApplications($id)
{
    $connection = mysql_open();
	   $query = "select * from application where job = $id";
	   $results = mysql_query($query, $connection) or show_error();
	   $applications = array();
	   while ($row = mysql_fetch_array($results))
	   {
	        $applications[] =$row;
	   }

     return $applications;


}







function apply($username, $j_id, $letter)
{
   $connection = mysql_open();
   $epoch = time();
   
	 $query = "insert into application(applicant, job, letter, date) values ('{$username}', $j_id, '{$letter}', from_unixtime($epoch));";
	 $results = mysql_query($query,$connection) or show_error();
	 
	 
     mysql_close($connection) or show_error();



}
function changeUserState($username, $j_id)
{
   $connection = mysql_open();
	 $query = "update users2 set jobID = $j_id where username = '{$username}'";
	 $results = mysql_query($query,$connection) or show_error();
	 
	 
     mysql_close($connection) or show_error();



}

function checkApplyState($username)
{
   $connection = mysql_open();
	 $query = "select * from users2, jobs2 where users2.username = '{$username}' and users2.jobID = jobs2.j_id";
	 $result = mysql_query($query,$connection) or show_error();
	 if (mysql_num_rows($result) == 1) 
  {
     
     mysql_close($connection) or show_error();
	return true; 
  }
   else 
	{
	 mysql_close($connection) or show_error();
	 
	  return false;
	 
	}

}




function update_job($id,$title,$location,$description,$salary)
{
       $connection = mysql_open();
		 $query = "update jobs2 set title = '{$title}', location = '{$location}', description = '{$description}', salary = $salary where j_id = $id";
		 $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();
}

function countdays($id) {
    $connection = mysql_open();

    $query = "select unix_timestamp(finalApply) as finalApply from jobs2 where j_id = $id";
    $result = mysql_query($query,$connection) or show_error();


if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result \n";
        die();
    }
	$expired = false;
    $item = mysql_fetch_array($result);
   $epoch = $item["finalApply"];

	       
   $date = new DateTime();
   $date->setTimestamp($epoch);
   
   $nowdate = new DateTime();
   $nowdate ->setTimestamp(time());
   
   $interval = $date->diff($nowdate);
    if($epoch < time())
	{
	   $expired = true;
	}
      

		   
	   
      $days = ($interval->y) * 365 + ($interval->m) * 30 + $interval->d;
   
   
    mysql_close($connection) or show_error();
    return array($expired, $days);
}



function currentjobs() {
    $connection = mysql_open();

    $query = "select unix_timestamp(time) as time, j_id, title, location, description, salary from jobs2";
    $results = mysql_query($query,$connection) or show_error();




   	   while ($row = mysql_fetch_array($results))
	   {
	       $epoch = $row["time"];
   $date = new DateTime();
   $date->setTimestamp($epoch);
   
   $nowdate = new DateTime();
   $nowdate ->setTimestamp(time());
   
   $interval = $date->diff($nowdate);

        if((($interval->y) == 0) && (($interval->m) == 0) && (($interval->d) < 8))
		{
		    $jobs[] =$row;
		}

		   
	   }
   
   
   
    mysql_close($connection) or show_error();
    return $jobs;
}

function authenticate($surname, $firstname, $password) {
  if (! isset($surname) || ! isset($password) || ! isset($firstname))
    return false;
	
   $username = $firstname;
   $username .= " ";
   $username .= $surname;
	
  $salt = substr($username, 0, 2);
  $encryptedPassword = crypt($password, $salt);
  $connection = mysql_open();
  $query = "SELECT * FROM users2 " .
           "WHERE username = '$username' AND password = '$encryptedPassword'";
  $result = mysql_query($query, $connection) or show_error();
  if (mysql_num_rows($result) == 1) 
  {
     $user = mysql_fetch_array($result);
     mysql_close($connection) or show_error();
	return $user; 
  }
   else 
	{
	 mysql_close($connection) or show_error();
	 
	  return false;
	 
	}
       
}

function checkManager($username) {
  if (! isset($username))
    return false;
	

  $connection = mysql_open();
  $query = "SELECT * FROM users2 " .
           "WHERE username = '$username' AND category = 'manager'";
  $result = mysql_query($query, $connection) or show_error();
  if (mysql_num_rows($result) == 1) 
  {
     
     mysql_close($connection) or show_error();
	return true; 
  }
   else 
	{
	 mysql_close($connection) or show_error();
	 
	  return false;
	 
	}
       
}

function checkParticularEmployer($username,$id) {
  if (! isset($username) || ! isset($id))
    return false;
	

  $connection = mysql_open();
  $query = "SELECT * FROM users2, employers2 WHERE employers2.e_id = $id AND employers2.name = users2.employer AND users2.username = '$username'";
  $result = mysql_query($query, $connection) or show_error();
  if (mysql_num_rows($result) == 1) 
  {
     
     mysql_close($connection) or show_error();
	return true; 
  }
   else 
	{
	 mysql_close($connection) or show_error();
	 
	  return false;
	 
	}
       
}



function clean ($input)
{
   $input= substr($input, 0, 100);
   return $input;
}



function update_user($password, $image, $username) {
       
	   $image_details = process_uploaded_image_file($image);
	   $password = mysql_escape_string($password);
	   $password = crypt($password, substr($username, 0, 2));
	   
	   $connection = mysql_open();
	   if (empty($image_details))
	   {
	      $query = "update users2 set password = '{$password}' where username = '{$username}'";
	   
	   }
	    else
		{
		    list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		     $query = "update users2 set password = '{$password}', imagedata =  '{$imagedata}', imagename = '{$imagename}', imagetype = '{$imagetype}', imagesize = '{$imagewidthheight}' where username = '{$username}'";
		
		}
		 
		 $results = mysql_query($query,$connection) or show_error();
		  mysql_close($connection) or show_error();


}









function listNum()
{
    $connection = mysql_open();
	$query = "select * from jobs2;";
	$result = mysql_query($query, $connection) or show_error();
	
    $num = mysql_num_rows($result);
    mysql_close($connection) or show_error();
	return $num;
	
}
?>