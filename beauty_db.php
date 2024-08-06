<?php


  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password);

  //Create connection

     $conn=mysqli_connect($servername,$username,$password);

    //  $sql1= "CREATE TABLE `limelight`.`Beauty`(`Name` VARCHAR(50) NOT NULL , `Type` VARCHAR(20) NOT NULL ,`Quantity` INT(10) NOT NULL , `Price` INT(10) NOT NULL , `Location` VARCHAR(100) NOT NULL ,`Details` TEXT NOT NULL ) ENGINE = InnoDB";
    //       $check1= mysqli_query($conn, $sql1);
          

    //       if($check1)
    //       {
    //         echo "Successfully Created Table";
    //       }
    //      else
    //      {
    //         echo "<h style='background-color:orange'>Successfully Created Table</h>";
    //      }



if(isset($_POST['submit']))
{
  
  //error_reporting(0);
  // $file=$_FILES['file'];
  // echo $_FILES['file'];
  //print_r($file);
  $product_name=$_POST['product_name'];
  $product_type=$_POST['Pt'];
  $product_detail=$_POST['details'];
  // $category=$_POST['cat'];
  // $highlights=$_POST['h_f'];

  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
  $filename=$_FILES['file']['name'];
  $filetem=$_FILES['file']['tmp_name'];
     
  $folder="New_image/".$filename;
  //echo $folder;

      

  
  if(move_uploaded_file($filetem, $folder))
  {

    $sql="INSERT INTO `limelight`.`Beauty`(`Name`,`Type`,`Quantity`,`Price`,`Location`,`Details`) VALUES('$product_name','$product_type','$quantity','$price','$folder','$product_detail')";
      if(mysqli_query($conn, $sql))
      {
        echo "<br><h style='background-color:Green;margin-top:40px'>Uploaded successfully</h><br>";
   
      }
      else
      {

        echo "<h style='background-color:orange'>Not uploaded successfully</h>";
        
        }     
    //   else
    // {
    //    echo "<h style='background-color:orange'>Not uploaded successfully</h>";
    // }
  }
  

}
?>