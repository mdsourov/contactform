<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Elegant Contact Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <h1>Elegant Contact Form</h1>
<form class="cf contact-form" action="contactform.php" method="post">
  <div class="half left cf">
    <input type="text" name="name" id="input-name" placeholder="Name">
    <input type="email" name="mail" id="input-email" placeholder="Email address">
    <input type="text" name="subject" id="input-subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>
  <input type="submit" value="Submit" id="input-submit">
</form>



</body>

</html>
