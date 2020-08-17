<?php


        // Function used to check email syntax
    function validate_email($email)
           {
            // Create the syntactical validation regular expression
            $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
            if (preg_match($pattern,$email) === 0){
                echo "The address <strong>".$_POST['email']."</strong> is invalid!";
            }else{
                echo $_POST['email']." is valid!";
            }
            }

             // Has the form been submitted?
          if (isset($_POST['submit'])){
                  echo "Hi ".$_POST["name"]." ". $_POST["lastname"]."!<br />";
                  validate_email($_POST['email']);
         
               }
    ?>

      <form action="subscribe.php" method="post">
              <p>
                  Name:<br />
                 <input type="text" name="name" size="20" maxlength="40" value="" />
             </p>

             <p>
                  LastName:<br />
                  <input type="text" name="lastname" size="20" maxlength="40" value="" />   
             </p>

              <p>
                   Email Address:<br />
                  <input type="text" name="email" size="20" maxlength="40" value="" />
              </p>

             <input type="submit" name = "submit" value="Go!" />
      </form>