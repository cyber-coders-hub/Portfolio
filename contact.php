<!-- In the database create a table having following colums:
1) number --(for phonenumber)
2) address --(for address)
3) email --(for email address)
4) facebook --(for facebook link)
5) instagram --(for instagram link)
6) twitter --(for twitter link)
7) telegram --(for telegram link)
8) github --(for github link)
9) linkedin --(for linkedin link) -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="contact.css" href=<%="'mystyle.css?version="+ DateTime.Now.ToString("yyyyMMddhhmmss") +"'"%>
</head>
<body class="bg-dark">
       <?php include 'navbar.php' ?>
       <?php 
    include 'db.php';
    $q = "select * from table_name";
    $query = mysqli_query($conn,$q);
    while($res = mysqli_fetch_array($query)){
    ?>
       <div class="contain">
  <img class = "bg" src="bg.webp" style="width: 100%;">

  <div class="top-left">
      <h1 class="topic">Get In Touch</h1><br>
      <h4><img class="call-icon" src="call-icon.png" alt="Error Loading Image" width="15rem"><?php echo $res['number']; ?></h4> 
      <h4><img class="location-icon" src="location-icon.png" alt="Error Loading Image" width="15rem"><?php echo $res['address']; ?></h4>
      <h4><a href="mailto:<?php echo $res['email']; ?>"><img class="mail-icon" src="mail-icon.png" alt="Error Loading Image" width="15rem"><?php echo $res['email']; ?></a></h4></div>


                   <ul class="socials">
                <li><a href="<?php echo $res['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="<?php echo $res['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                <li><a href="<?php echo $res['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $res['telegram']; ?>"><i class="fa fa-telegram"></i></a></li>
                <li><a href="<?php echo $res['github']; ?>"><i class="fa fa-github"></i></a></li>
                <li><a href="<?php echo $res['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>
            <?php } ?>
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
var a= document.getElementById('contact');
a.className+= ' active';
</script>
</html>
