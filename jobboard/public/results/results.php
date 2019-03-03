<?php require_once('../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>

<?php include(PUBLIC_PATH. '/results/queries.php'); ?>



<div class="outline">
    <h3 class="well well-sm ">
      Searching <?php echo $Job ?> jobs
    </h3>

    <form class=" well well-sm form-inline" action="" method="post" >
      <input class="form-control" type="text" name="company" placeholder="Company"/>
      <input class= "form-control" list="experience" name="experience" placeholder="Experience">
        <datalist id="experience">
          <option value="intern">
          <option value="entry-level">
          <option value="mid-Level">
          <option value="senior">
        </datalist>
      <input class="form-control"type="date" name= "date" placeholder="date posted" />
      <button class="form-control" type="submit">Search</button>
    </form>


    <br>
    <div class="aligntable">
    <table class="table table-hover">
        <?php  if (mysqli_num_rows($result) > 0) { ?>

          <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <span class="jobtitle"> <?php echo $row['job'];?> </span>
                    <span>, <?php echo $row['experience'];?> </span>
                    <span class="tablelink"> <a class="btn btn-primary" href="apply.php?id=<?php echo $row['id']?>"> Apply </a> </span>
                    <div> <?php echo $row['company'];?></div>
                    <div><?php echo $row['location'];?></div>
                    <div> Date Posted: <?php echo date("m-d-Y", strtotime($row['date']));?> </div>
                </td>
            </tr>
            <?php } ?>
        <?php } else {
              echo "0 results";
        } ?>
    </table>
  </div>

</div>




<?php include(SHARED_PATH . '/footer.php'); ?>
