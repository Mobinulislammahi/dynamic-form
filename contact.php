<?php
                if(isset($_POST['gbtn'])){
                        $name = $_POST['std-name'];
                        $phone = $_POST['std-phone'];
                        $email = $_POST['std-email'];
                        $course = $_POST['std-course'];
                        $batchNo = $_POST['std-batchNo'];
                }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <style>
                .section {
                        width: 50%;
                        margin: auto;
                        padding: 23px 24px;
                        margin-top: 74px;
                        }
                        .header {
                        padding: 5px;
                        background: #f45151;
                        font-size: 23px;
                        color: #fff;
                        }
                        .bottom-area {
                                display: grid;
                                grid-template-columns: repeat(2, 1fr);
                                padding: 50px 26px;
                                }
                        .image-area {
                                max-width: 245px;
                                }
                                .container {
                                        box-shadow: -1px 6px 30px black;
                                        }
                                        .image-area img{
                                                width: 100%;
                                        }
        </style>
</head>
<body>
<div class="section">
<div class="container">
        <div class="header">
                <h2>SDI Technology</h2>
        </div>
        <div class="bottom-area">
                <div class="image-area">
                        <img src="2.jpg" alt="">
                </div>
                <div class="details">
                        <h3><?php if(isset($name)){
                                echo $name;
                        } ?></h3>
                        <h2><?php if(isset($course)){
                                echo $course;
                        } ?></h2>
                        <h4><i class="fa-solid fa-star"></i>Phone#<?php if(isset($phone)){
                                echo $phone;
                        } ?></h4>
                        <h4><i class="fa-solid fa-star"></i>email#-<?php if(isset($email)){
                                echo $email;
                        } 
                         ?></h4>
                        <h4><i class="fa-solid fa-star"></i>Batch-no:<?php if(isset($batchNo)){
                                echo $batchNo;
                        } ?></h4>
                </div>
        </div>
</div>
</div>
        <?php
        
        ?>
        
</body>
</html>


