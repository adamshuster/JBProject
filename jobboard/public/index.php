<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
<?php include(PUBLIC_PATH. '/queries.php'); ?>



  <form class=" well form-inline" action="results/results.php?job=<?php echo $Job?>&location=<?php echo $location?>" method="get" >
    <input class= "form-control" list="jobs" name="job" placeholder="Search Jobs">
      <datalist id="jobs">
        <?php  if (mysqli_num_rows($jobtypes) > 0) { ?>
          <?php while($row = mysqli_fetch_assoc($jobtypes)) { ?>
              <option value="<?php echo $row['Jobs']?>" >
          <?php } ?>
          <?php } else {
            echo "0 results";
          } ?>
      </datalist>

      <input class= "form-control" list="locations" name="location" placeholder="Search location">
        <datalist id="locations">
          <?php  if (mysqli_num_rows($joblocation) > 0) { ?>
            <?php while($table = mysqli_fetch_assoc($joblocation)) { ?>
                <option value="<?php echo $table['cities']?>" >
            <?php } ?>
            <?php } else {
              echo "0 results";
            } ?>
        </datalist>


    <!-- <input class="form-control"  type="text" name="location" placeholder="Search Location" /> -->
    <button class="btn btn-primary searchbutton"  type="submit">Search</button>
  </form>

  <img src="images/jobsearch.jpg" class="img-rounded landingimage" alt="job">



<?php include(SHARED_PATH . '/footer.php'); ?>
