<?php


require 'functions.php';  //pull the functions here
require 'validation.php';  // pull the validations here


// the both require validation and function makes the big block of code to be separated 
  ?>

  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTRATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

  <section class="vh-100" style="background-color: eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">


                          <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                      if (!empty($errors['form'])) {
                        echo "<div class= text-danger role = 'alert'>" . $errors['form'] ."</div>";
                        $errors['form'] = '';
                      }

                      ?>

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Mobile Banking</p>

        


                <form class="mx-1 mx-md-4" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">

                 <div class="row">
                  <div class="col-md-6 mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="fname" placeholder="First Name" class="form-control" value="<?php echo $fname;?>"/>


                      <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                      if (!empty($errors['fname'])) {
                        echo "<div class= text-danger role = 'alert'>" . $errors['fname'] ."</div>";
                        $errors['fname'] = '';
                      }

                      ?>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="lname" placeholder="Last Name" class="form-control" value="<?php echo $lname;?>"/>
                      
                      <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                      if (!empty($errors['lname'])) {
                        echo "<div class= text-danger role = 'alert'>" . $errors['lname'] ."</div>";
                        $errors['lname'] = '';
                      }

                      ?>

                    </div>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example1c" name="id_number" placeholder="National Id Number" class="form-control" value="<?php echo $Id_number;?>"/>
                    
                    <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                    if (!empty($errors['Id_number'])) {
                      echo "<div class= text-danger role = 'alert'>" . $errors['Id_number'] ."</div>";
                      $errors['Id_number'] = '';
                    }

                    ?>

                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="email" id="form3Example3c" name="email" placeholder="Enter email" class="form-control" value="<?php echo $email ?>" />
                        
                    <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                    if (!empty($errors['email'])) {
                      echo "<div class= text-danger role = 'alert'>" . $errors['email'] ."</div>";
                      $errors['email'] = '';
                    }

                    ?>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example4cd" name="phone_number" placeholder="+25471234567" class="form-control" value="<?php echo $phone_number ?>" />
                    
                    <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                    if (!empty($errors['phone_number'])) {
                      echo "<div class= text-danger role = 'alert'>" . $errors['phone_number'] ."</div>";
                      $errors['phone_number'] = '';
                    }

                    ?>

                  </div>
                </div>

                <strong>Type of account</strong>

                <div class="form-check">
                  <input class="form-check-input" type="radio" id="flexRadioDefault1" name="accountType" value="corperate">
                  <label class="form-check-label">Corperate</label><br>
             
              
                  <input class="form-check-input" type="radio" id="flexRadioDefault1" name="accountType" value="personal">
                  <label class="form-check-label">Personal</label>
                        <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                  if (!empty($errors['type_of_account'])) {
                    echo "<div class= text-danger role = 'alert'>" . $errors['type_of_account'] ."</div>";
                    $errors['type_of_account'] = '';
                  }

                  ?>
                </div><br>


                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label><strong>Country</strong></label>
                    <select class="select form-control-sm" name="country">
                      <option value="1" disabled>Choose option</option>
                      <option value="KENYA">KENYA</option>
                      <option value="UGANDA">UGANDA</option>
                      <option value="TANZANIA">TANZANIA</option>
                      <option value="MALAWI">MALAWI</option>
                      <option value="RWANDA">RWANDA</option>
                      <option value="BURUNDI">BURUNDI</option>
                      <option value="NIGERIA">NIGERIA</option>
                    </select>
                    

                    
                  </div>
                  <div class="col-md-6 mb-4">

                    <label><strong>County</strong></label>
                    <select class="select form-control-sm" name="county">
                      <option value="1" disabled>Choose option</option>
                      <option value="NAIROBI">NAIROBI</option>
                      <option value="KISUMU">KISUMU</option>
                      <option value="KAJIADO">KAJIADO</option>
                      <option value="KIAMBU">KIAMBU</option>
                      <option value="TANA RIVER">TANA RIVER</option>
                      <option value="MOMBASA">MOMBASA</option>
                      <option value="NAKURU">NAKURU</option>
                    </select>

                  </div>
                </div>
                

                <div class="form-check d-flex justify-content-xl-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" id="form2Example3c" name="agree" value="yes" />
                  <label class="form-check-label">
                    I agree all statements in <a href="">Terms of service</a>
                  </label>
                  <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                  if (!empty($errors['terms'])) {
                    echo "<div class= text-danger role = 'alert'>" . $errors['terms'] ."</div>";
                    $errors['terms'] = '';
                  }

                  ?>
                </div>

                <div class="d-flex justify-content-end mx-4 mb-3 mb-lg-4">
                  <input type="submit" value="Register" id= "register" class="btn btn-primary btn-lg" onclick="auth()" />

                </div>
                <script type="text/javascript">

                  
                 function auth() {
                        if(empty(errors['form'])){
                          alert("your data has been submitted succesfully");
                        }else{
                          alert("please correct the areas marked in red thank you!!!");
                        }
                      }

                </script>

            </div>
            <div class="col-md-10 col-lg-6 col-xl-7 order-1 order-lg-2 bg-success">

              <img src="phoneT.jpg" class="img-thumbnail"><br><br>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <label><strong>City</strong></label>
                  <select class="select form-control-sm" name= "city">
                    <option value="1" disabled>Choose option</option>
                    <option value="NAIROBI">NAIROBI</option>
                    <option value="KAKAMEGA">KAKAMEGA</option>
                    <option value="KISUMU">KISUMU</option>
                    <option value="BUSIA">BUSIA</option>
                    <option value="MACHAKOS">MACHAKOS</option>
                    <option value="NAKURU">NAKURU</option>
                    <option value="KISII">KISII</option>
                  </select>

                </div>
                 <div class="col-md-6 mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label><strong>Year of Birth</strong></label>
                      <input type="text" id="form3Example1c" name="yob" placeholder="Year of birth" class="form-control" value="<?php echo $Year_of_birth;?>"/>

                      <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                      if (!empty($errors['Year_of_birth'])) {
                        echo "<div class= text-danger role = 'alert'>" . $errors['Year_of_birth'] ."</div>";
                        $errors['Year_of_birth'] = '';
                      }

                      ?>
                    </div>
               
              </div><br><br>

              <div>
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                  class="rounded-circle" alt="example placeholder" style="width: 100px;" />
                </div>
                <div class="d-flex justify-content-center">
                  <div class="btn btn-primary btn-rounded">
                    <label class="form-label text-white m-1" for="customFile2">Upload Image</label>
                    <input type="file" class="form-control d-none" id="customFile2" name="photo"/>


                     <?php 
          //$errors array or the email variable is still accessible since it was pulled by the validation.php
                      if (!empty($errors['photo'])) {
                        echo "<div class= text-danger role = 'alert'>" . $errors['photo'] ."</div>";
                        $errors['photo'] = '';
                      }

                      ?>



                  </div>
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  
</script>
</body>
</html>