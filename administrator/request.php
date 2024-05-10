<?php include 'header.php'; ?>
<style type="text/css">
	
</style>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Movie Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Dispute</th>

    </tr>
  </thead>
  <tbody>
  	<?php 
  	$query = "SELECT * FROM request";
  	$run = mysqli_query($conn,$query);
  	if ($run) {
  		while ($row = mysqli_fetch_assoc($run)) {
  			?>



    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['moviename']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><a href="deletereview.php?id=<?php echo$row['id'] ?>" class="btn btn-primary">Dispute</a></td>
    </tr>
   <?php
  		}
  	}
  	 ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>