<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" href=<%="'mystyle.css?version="+ DateTime.Now.ToString("yyyyMMddhhmmss") +"'"%>
</head>

<body class="bg-dark">
    <?php include'navbar.php'; ?>
    <div class="word"></div>
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
<script>var a= document.getElementById('home');
a.className+= ' active';</script>

  <!-- Create a table in database having a row   
  and insert the text into the row which you want to display on homepage  -->

  <!-- Insert the text in the given format -->
  <!-- 'string-1','string-2','string-3' and so on. -->

<?php 
    include 'db.php';
    $q = "select * from table_name";
    $query = mysqli_query($conn,$q);
    while($res = mysqli_fetch_array($query)){
    ?>
<script>var words = [<?php echo $res['row_name']; ?>,],

part,
i = 0,
offset = 0,
len = words.length,
forwards = true,
skip_count = 0,
skip_delay = 15,
speed = 70;
var wordflick = function () {
setInterval(function () {
if (forwards) {
  if (offset >= words[i].length) {
    ++skip_count;
    if (skip_count == skip_delay) {
      forwards = false;
      skip_count = 0;
    }
  }
}
else {
  if (offset == 0) {
    forwards = true;
    i++;
    offset = 0;
    if (i >= len) {
      i = 0;
    }
  }
}
part = words[i].substr(0, offset);
if (skip_count == 0) {
  if (forwards) {
    offset++;
  }
  else {
    offset--;
  }
}
$('.word').text(part);
},speed);
};

$(document).ready(function () {
wordflick();
});</script>
<?php }?>


</html>