<!-- https://drive.google.com/u/0/uc?id=1R4gdc9HHah3TAO_QMIAuaYyz71Crm3jU&export=download -->
<!-- https://drive.google.com/file/d/1mGfCgAgOtvrNK7hde0uwerIrtjBrzNGv/edit -->



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<style>
        
section {
  padding: 10px 0px;
  text-align: center;
}
section input {
  font-size: 19px;
  width: 432px;
  height: 39px;
}
.container {
}
.container {
  text-align: center;
  width: 50%;
  margin: auto;
  margin-top: 110px;
  box-shadow: 1px 8px 35px black;
}
.container label {
  font-size: 24px;
}

#btn {
  font-size: 20px;
  text-align: right;
  padding: 15px 18px;
  background: blue;
  color: #fff;
  border: none;
  border-radius: 9px;
  cursor: pointer;
  margin-bottom: 34px;
  transition: 0.3s;
}
#btn:hover{
  background: #0000a6;
}
</style>
<body>
      
<!-- <form method="POST" action="contact.php" >
        Name: <input type="text" name="faname" placecholeder="Name"><br><br>
        email: <input type="email" name="email" placecholeder="email"><br><br>
        Password: <input type="password" name="pass" placeholder="password"><br><br>
        <input type="submit" name="btn" value="submit Data">

</form>  -->
<div class="form-area">
<div class="container">
                <h1>Create Your Virtual Id Card</h1>
                <form action="contact.php" method="POST">
                    <section>
                         <label for="name">Name</label>
                         <input type="text" name="std-name" placeholder="John Doe"><br>
                    
                    </section>
               
                    <section>
                     <label for="phn">Phone</label>
                     <input type="number" name="std-phone" placeholder="+(880)01647-135496"><br>
                    </section>
             
                        <section>
                        <label for="eml">Email</label>
                        <input type="email" name="std-email" placeholder="somebody@gmail.com"><br>
                        </section>
                
                        <section>
                        <label for="crse">Course</label>
                        <input type="text" name="std-course" placeholder="Name of your Course"><br>
                        </section>
                
                        <section>
                        <label for="btc">Batch No</label>
                        <input type="text" name="std-batchNo" placeholder="Your Batch No">
                        
                        </section>
                        <input type="submit" name="gbtn" id="btn" value="Generate Profile">
                </form>
        </div>
</div>


       
<?php 
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         // collect value of input field
//         $name = $_POST['fname'];
//         if (empty($name)) {
//           echo "Name is empty";
//         } else {
//           echo $name;
//         }
//       }
            
//       $marks = 85;
//       if($marks >= 80  && $marks <=100){
//           echo "You Got in A+";
//       }
//       elseif($marks >=70 && $marks <=80){
//               echo "You got in A";
//       }
//       elseif($marks >=60 && $marks <=70){
//               echo "You got in A-";
//       }
//       elseif($marks >= 50 && $marks <= 60){
//               echo "You got in B";
//       }
//       else{
//               echo "You are failed";
//       }
        
                // for($i=1; $i<=50; $i++){
                //         if($i%2 === 0){
                //                 echo $i."<br>";
                //         }
                // }
                // $marks = 2;
                // while($marks<=1000){
                //         echo $marks. "<br>";
                //         $marks++;
                // }
                // do{
                //         echo $marks. "<br>";
                //         $marks++;
                // }while($marks<=500);
                 
                
                // $arr = array("mahi", "jahi", "nahid");

                // $run =array("Shakib"=>80, "Mushfiq"=>69, "Mustafiz"=>79 );
                // echo $run["Shakib"];

                // $city = array("cox", "Dhaka", "Rajshahi", "Chittagong", "Cumilla", "Maimenshing");
                // echo "<ul>";
                // foreach($city as $value){
                //         echo ("<li>My district $value" . "<br></li>");
                // }
                // echo "</ul>";




?>
</body>
</html>


    

   