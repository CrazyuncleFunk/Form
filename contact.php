<head>
<link rel="stylesheet" href="..\Form\contact.css">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


</head>
<body>
  <header>
    <div class="logo">
      <h2 class="logo-head">Erin Dunn</h2>
      <p class="logo-subhead">Portfolio</p>
    </div>
    <nav>
      <ul>
        <li><a class="bar" href="..\Portfolio-website\index.html">Home</a></li>
        <li><a class="bar " href="..\Portfolio-website\projects.html">Projects</a></li>
        <li><a class="bar current-page" href="..\Portfolio-website\contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">

    <h1 class="contact">Get In Touch </h1>
    <form method="post" name="myemailform" id="myemailform" action="contact.php">
      <label for="name">Name: <input type="text" class="feild" name="name" id="name">
      <label for="email">Email: <input type="email" class="feild" name="email" id="email">
      <textarea class="textarea" name="message" id="textarea"></textarea>
      <button type="submit" class="btn">Submit</button>
    </form>

</div>
<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_from = 'erindunn@live.co.uk';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from $name";
  $to = 'erindunn@live.co.uk';
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>
</body>
