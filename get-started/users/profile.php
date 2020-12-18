<?php
require_once '../bootstrap/app.php';
require_once file_header();
require_once '../connection.php';

/**
* get the user profile and decode it
* store the current user id in a index variable
* the current user id is greater then the first index of profile data
* then ve use decrement operator
* i.e --$index
*/
try{
    $id=intval($_SESSION['id']);
if(isset($_SESSION['username'])){
$sql="SELECT *FROM user_details WHERE user_id='$id'";
$data = $connection->prepare($sql);
$data->execute();
$results = $data->fetchAll(PDO::FETCH_ASSOC);

?>
<div class='container'>
<div class="profile-header-content">
<div class="profile-header-img">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
</div>
<form>
<div class='row'>
<div class='col-md-6'>
<form method='post'>
<label class='labels'><strong>Name</strong></label>
<?php echo $_SESSION['username'] ?><br>
<label class='labels'><strong>Email</strong></label>
<?php echo $_SESSION['login'] ?><br>
<label class='labels'><strong>Role</strong></label>
<?php echo $_SESSION['Role'] ?><br>
</div>
<div class='col-md-6'>
<a href='../edit-profile.php' class='m-l-10'>Edit</a>
</div>
</div>
<hr>
<?php foreach ($results as $users) {  
    ?>
<div class='row'>
<div class='col-md-6'>
<label class='labels'><strong>Address</strong></label><br>
<?php echo $users['address'] ?><br>
<label class='labels'><strong>State</strong></label><br>
<?php echo $users['state'] ?><br>
<label class='labels'><strong>Distt</strong></label><br>
<?php echo $users['distt'] ?><br>
<label class='labels'><strong>Country</strong></label><br>
<?php echo $users['country'] ?><br>
<label class='labels'><strong>Pin</strong></label><br>
<?php echo $users['pin'] ?><br>
<label class='labels'><strong>Age</strong></label><br>
<?php echo $users['age'] ?><br>
</div>
<div class='col-md-6'>
<label class='labels'><strong>DOB</strong></label><br>
<?php echo $users['date_of_birth'] ?><br>
<label class='labels'><strong>Height</strong></label><br>
<?php echo $users['height'] ?><br>
<label class='labels'><strong>Weight</strong></label><br>
<?php echo $users['weight'] ?><br>
<label class='labels'><strong>Gender</strong></label><br>
<?php echo $users['gender'] ?><br>
<label class='labels'><strong>Skin</strong></label><br>
<?php echo $users['skin'] ?><br>
<label class='labels'><strong>Hair</strong></label><br>
<?php echo $users['hair'] ?><br>

</div>
</div>

</form>
</div>
</div>
<?php
}
}
}
catch(PDOException $e){
  $e->getMessage();
}
require_once file_footer();
