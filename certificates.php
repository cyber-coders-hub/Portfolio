<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="certificates.css">
</head>
<body class="bg-dark">
<?php include 'navbar.php'; ?>

    <?php 
    include 'db.php';
    $q = "select * from certificates";
    $query = mysqli_query($conn,$q);
    while($res = mysqli_fetch_array($query)){
    ?>
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <div class="carousel-inner py-4">
    <div class="carousel-item active">
      <div class="container" >
        <div class="col">
            <div class="span4">
            <div class="card">
              <img
                src="<?php echo $res['certificates_link']; ?>"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $res['certificates_name']; ?></h5>
                <p class="card-text">
                <?php echo $res['certificates_detail']; ?>
                </p>
                <a href="<?php echo $res['certificates_link']; ?>" class="btn btn-primary">Click to View</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>

<?php }?>

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
var a= document.getElementById('certificates');
a.className+= ' active';
</script>
</html>