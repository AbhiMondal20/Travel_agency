 <?php
 include "connection.php";
        error_reporting(0);

        if(isset($_POST['reset']))
        {
            if($_POST['newpass'] == $_POST['cnfrmpass'])
            {
                $sql = "UPDATE `data` SET `password`='$_POST[newpass]' WHERE `email` = '$_GET[email]'";
                if($conn->query($sql) !== true)
                {
                    die("<div class='alert alert-warning'>
                    Error in changing password
                    </div>");
                }
                header("location:privacysettings.php?msg=3");
                exit;
            }
            else{
                echo "<div class='alert alert-warning'>
                        Passwords not matched!
                      </div>";
            }
        }
    ?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-info text-white"></div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="newpass" class="form-control" placeholder="New Password" required="required" autofocus="autofocus">
                <label for="inputPassword">New Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="cnfrmpass" name="cnfrmpass" class="form-control" placeholder="Confirm Password" required="required">
                <label for="cnfrmpass">Confirm Password</label>
              </div>
            </div>
            <button type="submit" name="reset" class="btn btn-primary btn-block">Reset</button>
          </form>
        </div>
      </div>
    </div>