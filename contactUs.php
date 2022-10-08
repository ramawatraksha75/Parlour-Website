<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rachel Beauty Salon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<!--Nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Rechal Salon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#aboutUs">About Us</a>
        </li>
    </div>
  </div>
</nav>


<!-- contact us-->

<section class="my-4">
  <div class="py-4">
    <h1 class="text-center">Contact Us</h1>
  </div>

  <div class="w-50 m-auto">
    <form action="conect.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address" class="form-control">
      </div>
    <div>
      <ul>
        <li>facial(Rs 800-1500/-)</li>
        <li>clean up(Rs 300-800/-)</li>
        <li>body waxing(Rs 700/-)</li>
        <li>Hair cut(Rs 200/-)</li>
        <li>Hair spa(Rs 600-1000/-)</li>
        <li>Party makeup(Rs 700/-)</li>
        <li>Bridal makeup(Rs 3000/-)</li>
        <li>Eyebrows/upperlips(Rs 50/-)</li>
        <li>Bridal services(Rs 10000/-)</li>
        <li>Manicure/Padicure(Rs 1500/-)</li>
      </ul>
    </div>

    <div class="form-group">
        <label>Enter Service:</label>
        <input type="text" name="services" class="form-control">
      </div>


    
    <div style="padding-top: 3%;padding-bottom:3%;">
    <label for="appointment">Choose appointment date:</label>
    <input type="date" id="apointdate" name="apointdate">
    <br>

    <label for="apointment">Choose an appointment time: </label>
    <input id="apointtime" type="time" name="apointtime" value="00:00" />
    </div>


      <button type="submit" class="btn btn-success" >Submit</button>
    </form>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>