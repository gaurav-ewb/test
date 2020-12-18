   <?php
  require_once '../connection.php';
  require_once '../bootstrap/app.php';
  require_once file_header();
  if(!isset($_SESSION['login'])){
      header('Location:../alert.php');
      die;
  }
    if ($_SESSION['Role'] == 'admin') {
    $_SESSION['username'];
     '<br>';
    $_SESSION['Role'];
   ?>
       <div class='container'>
           <a class='btn btn-primary' href=' create.php ' role='button'>
               <h5>CREATE USER</h5>
           </a>
       </div>
       <div class="container">
       <table class='table table-striped'>
           <thead class='table-dark'>
               <tr>
                   <!-- Set the table headings -->

                   <th scope='col'>name</th>
                   <th scope='col'>email</th>
                   <th scope='col'>role</th>
                   <th scope='col'>action</th>
               </tr>
           </thead>
           <!-- get the user data and decode it -->
 
           <?php $users = $connection->query("SELECT * FROM user")->fetchAll();
            // Start the loop for all users

            foreach ($users as $user) {
            ?>
               <tbody>
                   <tr>
                       <!-- Set the table data -->
                       <td><?php echo $user['name'] ?></td>
                       <td><?php echo $user['email'] ?></td>
                       <td><?php echo $user['role'] ?></td>
                       <td>
                           <a class='btn btn-primary' href="edit.php?id=<?php echo $user['id'] ?>" role='button'>edit</a>
                           <a class='btn btn-danger' href="destroy.php?id=<?php echo $user['id'] ?>" role='button'>delete</a>
                           <a class='btn btn-info' href="view.php?id=<?php echo $user['id'] ?>" role='button'>view</a>
                       </td>
                   </tr>
              
    
       </div>
           <?php
            } 
        }else{
            
    //echo $_SESSION['login'];
   // echo '<br>';
    //echo $_SESSION['email'];
        }
    
        ?>
