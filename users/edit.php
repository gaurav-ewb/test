    <?php
   
    require_once __DIR__ . '/../bootstrap/app.php';
    require_once __DIR__ . '/../connection.php';
    require_once file_header();
    /**
     * get the profile data and decode it
     * store the $_GET['id] in a variable
     * decrement the id beacuse the array index start with 0 
     */ 
    $id=$_GET['id'];
    try {
        //code...
    if(isset($_SESSION['username'])){
    $sql="select a.id,a.user_id,a.address,a.pin,a.age,a.state,a.name,a.country,a.date_of_birth,a.height,a.weight,a.gender,a.skin,a.hair,a.distt,user.email,user.role FROM user_details as a INNER JOIN user ON a.user_id=user.id WHERE a.user_id =$id";
    $data = $connection->prepare($sql);
    $data->execute();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
 //  print_r($results);
      foreach ($results as $row) {
       if(($_SESSION['id']== $row['user_id'] AND $row['role'] == "admin" ) OR $row['role'] == "user" )  
       {
    ?>
    <div class='container'>
        <!-- creat edit_profile form  -->
        <div class='row'>

            <div class='col-lg-6'>
                <form method='post'>
                    <div class='form-group'>
                        <label> Name</label>
                        <input type='text' name='name' class='form-control' value="<?php echo $row['name']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> Email</label>
                        <input type='text' name='email' class='form-control' value="<?php echo $row['email']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> address</label>
                        <input type='text' name='address' class='form-control' value="<?php echo $row['address']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> state</label>
                        <input type='text' name='state' class='form-control' value="<?php echo $row['state']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> distt</label>
                        <input type='text' name='distt' class='form-control' value="<?php echo $row['distt']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> country</label>
                        <input type='text' name='country' class='form-control' value="<?php echo $row['country']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> pin</label>
                        <input type='number' name='pincode' class='form-control' value="<?php echo $row['pin']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> age</label>
                        <input type='number' name='age' class='form-control' value="<?php echo $row['age']; ?>">
                    </div>
                    <label>DOB</label>
                    <select name='DOB'>
                        <?php
                        /**
                         * loop for date of month
                         * the initial value is one
                         * and the final is 31
                         
                         */
                        for ($i = 1; $i <= 31; $i++) {
                        ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php
                        }
                        ?>

                    </select>
                    <select name='DOB'>
                        <?php
                        // loop for month
                        for ($i = 1; $i <= 12; $i++) {

                        ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php

                        }

                        ?>

                    </select>
                    <select name='DOB'>

                        <?php
                        // loop for geting year
                        for ($i = 1980; $i <= date('Y'); $i++) {
                        ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php

                        }

                        ?>

                    </select>
                    <div class='form-group'>
                        <label> height</label>
                        <input type='number' name='height' class='form-control' value="<?php echo $row['height'] ?>">
                    </div>

            </div>

            <div class='col-lg-6'>

                <div class='form-group'>
                    <label> weight</label>
                    <input type='text' name='weight' class='form-control' value="<?php echo $row['weight'] ?>">
                </div>

                <div class='form-group'>

                    <label>Skin color</label>
                    <input type='text' name='skin' class='form-control' value="<?php echo $row['skin']; ?>">
                </div>
                <div class='form-group'>
                    <label> hair color</label>
                    <input type='text' name='hair' class='form-control' value="<?php echo $row['hair'] ?>">
                </div>

                <div class='form-group'>
                    <label class='control-label col-sm-3'>Gender</label>
                    <div class='col-sm-6'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' name='gender' value='female'>Female
                                </label>
                            </div>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' name='gender' value='male' checked>Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type='hidden' name='action' value='edit'>
                <input type='submit' class='btn btn-danger' name='submit' value="save">
                </form>
            </div>

        </div>

    </div>
            <?php } 
               else {
                   echo "you can't edit admin";
               }
                }
                 }
    } catch (\Throwable $th) {
        $th->getMessage();
    }
                 ?>
