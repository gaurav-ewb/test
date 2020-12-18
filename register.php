     <?php require_once __DIR__ . "/bootstrap/app.php"; ?>
     <?php require_once file_header(); ?>
     <div class="container">
       <h2 class="tag_h2">register form</h2>
       <form class="form-group" method="post">
           <input type="hidden" value="register" name="action">
           <label class="labels">Name</label>
           <input type="text" name="Name" class='form-control'><br>
           <label class="labels">Email Address:</label>
           <input type="email" name="email" class='form-control'><br>
           <label class="labels">Password: </label>
           <input type="password" name="password" class='form-control'><br>
           <label class="labels"> Confirm Password:</label>
           <input type="password" name="cPass" class='form-control'><br>
           <label for="role">Select Role</label><br>
           <select name="role" id="role">
             <option value="" selected>Select role</option>
             <option value="admin">admin</option>
             <option value="editor">editor</option>
             <option value="user">user</option><br>
           </select><br>
           <input type="submit" class="btn btn-danger" name="submit" value='submit'>
           already have an account?
           <a href='login.php'>Login here</a>
         </form>
     </div>
     <?php 
     require_once file_footer() ;
     ?>
