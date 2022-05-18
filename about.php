<!-- In the database create a table with following columns:
     1) name
     2) dob
     3) address
     4) email
     5) website
     6) hobbies
     7) des 
     8) photo --(photo embed link)
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css" href=<%="'mystyle.css?version="+ DateTime.Now.ToString("yyyyMMddhhmmss") +"'"%>
</head>
<body class="bg-dark">
    <?php include 'navbar.php'; ?>
    <?php 
    include 'db.php';
    $q = "select * from table_name";
    $query = mysqli_query($conn,$q);
    while($res = mysqli_fetch_array($query)){
    ?>
        <div class="body">
        <img class="pp" src="<?php echo $res['photo']; ?>" loading="lazy" alt="Error Loading Image">
        <h1 class="title about">Summary</h1>
        <p class="name">Name:<p class="db_name"><?php echo $res['name']; ?></p></p>
        <p class="dob">DOB:<p class="db_dob"><?php echo $res['dob']; ?></p></p>
        <p class="address">Address:<p class="db_address"><?php echo $res['address']; ?></p></p>
        <p class="email">Email:<p class="db_email"><a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?></a></p></p>
        <p class="website"> Website:<p class="db_website"><a href="<?php echo $res['website']; ?>"><?php echo $res['website']; ?></a></p></p>
        <p class="hobbies"> Hobbies:<p class="db_hobbies"><?php echo $res['hobbies']; ?></p></p>
        <p class="bio">Bio:<h5 class="db_bio"><?php echo $res['des']; ?></h5></p>
        </div>
    <?php 
    }
    ?>
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
var a= document.getElementById('about');
a.className+= ' active';
</script>
</html>
