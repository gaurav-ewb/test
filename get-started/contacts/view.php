<?php
     require_once __DIR__ . '/../bootstrap/app.php';

     require_once file_header();
     
     require_once '../connection.php';
     if (isset($_SESSION['username'])) {
         // $get_contact = file_get_contents(file_contact());
         // $datacontact = json_decode($get_contact, true);
         try{
             $sql = "SELECT * FROM contacts";
             // print_r($sql);
             $query = $connection->prepare($sql);
             // print_r($query);
              
             $query->execute();
             $results = $query->fetchAll(PDO::FETCH_ASSOC);
 
        
        // $get_contact = file_get_contents(file_contact());
        // $data_contact = json_decode($get_contact, true);

      ?>
      <div class="container"> 
       <table class="table">
         <thead>
           <tr>
           
             <th scope="col">fullname</th>
             <th scope="col">mobile</th>
             <th scope="col">birthday</th>
             <th scope="col">email</th>
             <th scope="col">nickname</th>
             <th scope="col">company</th>
             <th scope="col">job_title</th>
             <th scope="col">home_email</th>
             <th scope="col">website</th>
             <th scope="col">location</th>
             <th scope="col">notes</th>

           </tr>
         </thead>

         <tbody>
           <tr>
             <?php
              // array_filter($data_contact , function($data){
              //   if($data['id'] == $_GET['id']){ //comapare the contact id and get id
                foreach($results as $data){
                  if($data['id']==$_GET['id']){
              ?>
             
                 <td><?php echo $data['fullname']; ?></td>
                 <td><?php echo $data['mobile']; ?></td>
                 <td><?php echo $data['birthday']; ?></td>
                 <td><?php echo $data['email']; ?></td>
                 <td><?php echo $data['nickname']; ?></td>
                 <td><?php echo $data['company']; ?></td>
                 <td><?php echo $data['job_title']; ?></td>
                 <td><?php echo $data['home_email']; ?></td>
                 <td><?php echo $data['website']; ?></td>
                 <td><?php echo $data['location']; ?></td>
                 <td><?php echo $data['notes']; ?></td>

             <?php
                } 
              }
           

              ?>

           </tr>
           <tr>


           </tr>
         </tbody>

       </table>
      </div>
     <?php

      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }
      require_once file_footer();
