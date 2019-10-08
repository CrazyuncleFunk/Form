<?php
if(isset($_POST['submit'])){
    $to = 'erindunn@live.co.uk';
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    }
?>
<!DOCTYPE html>

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
    <form method="post" name="myemailform" id="myemailform" action="">
      <label for="name">Name: <input type="text" class="feild" name="first_name" id="name">
      <label for="name">Name: <input type="text" class="feild" name="last_name" id="name">
      <label for="email">Email: <input type="email" class="feild" name="email" id="email">
      <textarea class="textarea" name="message" id="textarea"></textarea>
      <button type="submit" class="btn">Submit</button>
    </form>

</div>



</body>
</html>
