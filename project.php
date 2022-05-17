<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="projects.css" href=<%="'mystyle.css?version="+ DateTime.Now.ToString("yyyyMMddhhmmss") +"'"%>
</head>
<body class="bg-dark">
    <?php include 'navbar.php' ?>
    <h1 class="topic">Github Projects</h1>
    <br>
    <br><br>
    <div>

  <?php
  // for example your user
  $user = 'github_username';

  // A token that you could generate from your own github 
  // go here https://github.com/settings/applications and create a token
  // then replace the next string
  $token = 'github_token';

  // We generate the url for curl
  $curl_url = 'https://api.github.com/users/' . $user . '/repos';

  // We generate the header part for the token
  $curl_token_auth = 'Authorization: token ' . $token;

  // We make the actuall curl initialization
  $ch = curl_init($curl_url);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // We set the right headers: any user agent type, and then the custom token header part that we generated
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $curl_token_auth));

  // We execute the curl
  $output = curl_exec($ch);

  // And we make sure we close the curl       
  curl_close($ch);

  // Then we decode the output and we could do whatever we want with it
  $output = json_decode($output);
    $count = 0;
    $lk='';
  if (!empty($output)){
    // now you could just foreach the repos and show them
    foreach ($output as $repo) {
        print '<div class="col-sm"><a href="' . $repo->html_url . '"  ><img class="url" src="https://gh-card.dev/repos/github_username/'. $repo->name . '.svg"></a><br />';

    }
  }


?>
    </div>
  </div>
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
var a= document.getElementById('projects');
a.className+= ' active';
</script>
</html>