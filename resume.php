<!-- In the database create two tables:

  1st (i.e your education) table contains following rows:
    1) level -- (for data like primary,secondary,bachelor,masters,etc)
    2) date1 -- (for starting date)
    3) date2 -- (for ending date)
    4) course -- (for course_name like BSC CSIT, BIT, BCA, BBA,etc)
    5) oraginzation --(for institution name)
    6) des --(about your studies and about your college)

  2nd (i.e your experience or job) table contains following rows:
    1) topic -- (for your job title or internship title)
    2) year -- (for how many years you worked there)
    3) date1 -- (starting date)
    4) date2 -- (ending date)
    5) company -- (Company name)
    6) des -- (about your job or internship or company details) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="resume.css" href=<%="'mystyle.css?version="+ DateTime.Now.ToString("yyyyMMddhhmmss") +"'"%>
</head>
<body class="bg-dark">
    <?php include 'navbar.php' ?>
    <h2 class="title1">Education</h2>
    <div class="list-group " id="education" >
    <?php 
    include 'db.php';
    $q = "select * from 1st_table_name";
    $query = mysqli_query($conn,$q) or die( mysqli_error($conn));
    while($res = mysqli_fetch_array($query)){
    ?>
    <div class="body">
  <span class=" list-group-item list-group-item-action flex-column align-items-start resume bg-dark border-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $res['course'];?> <br>( <span class="sub_head"><?php echo $res['level']; ?> </span>)</h5>
      <small class="date"><?php echo $res['date1']; ?> - <?php echo $res['date2']; ?></small>
    </div>
    <br>
    <p class="mb-1">At <?php echo $res['organization']; ?></p>
    <small  class="desc"><?php echo $res['des']; ?></small>
    </span>
  <hr color="white" width="100%">
</div>
</div>
<?php }?>
</div>
<div class="body">
<h2 class="title2">Experience</h2>
    <div class="list-group " id="experience" >
    <?php 
    include 'db.php';
    $q = "select * from 2nd_table_name";
    $query = mysqli_query($conn,$q) or die( mysqli_error($conn));
    while($res = mysqli_fetch_array($query)){
    ?>
    
  <span class="list-group-item list-group-item-action flex-column align-items-start resume bg-dark border-0">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $res['topic'];?> <br>( <span class="sub_head"><?php echo $res['year']; ?></span>)</h5>
      <small class="date"><?php echo $res['date1']; ?> - <?php echo $res['date2']; ?></small>
    </div>
    <br>
    <p class="mb-1">At <?php echo $res['company']; ?></p>
    <small class="desc"><?php echo $res['des']; ?></small>
    </span>
  <hr color="white" width="100%">
</div>
</div>
<?php }?>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script>
var a= document.getElementById('resume');
a.className+= ' active';
</script>
</html>