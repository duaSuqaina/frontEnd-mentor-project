<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylesheet.css">
  
  <title>Frontend Mentor | Intro section with dropdown navigation</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light menu-cls" style="background-color: #fff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./images/logo.svg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Features
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Todo List</a></li>
              <li><a class="dropdown-item" href="#">Calender</a></li>
              <li><a class="dropdown-item" href="#">Reminders</a></li>
              <li><a class="dropdown-item" href="#">Planning</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Company
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">History</a></li>
              <li><a class="dropdown-item" href="#">Our Team</a></li>
              <li><a class="dropdown-item" href="#">Blog</a></li>
            </ul>
          </li>
          
          <li class="nav-item"><a class="nav-link active" href="#">Careers</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
        
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="#">Login</a>
          <button class="btn btn-outline-dark navbar-btn" type="submit">Register</button>
        </div>
  
      </div>
  </nav>
    
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12  space">
        <h1>Make<br> remote work</h1>

        <p>Get your team in sync, no matter your location. Streamline processes, 
          create team rituals, and watch productivity soar.</p>
      
        <button class="btn btn-dark">Learn more</button>
      </div>
      <div class="col-lg-6 col-md-12 img-col">
        <img class="hero-image" src="./images/image-hero-desktop.png">
      </div>
    </div>
  </div> 
 
  
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div>
</body>
</html>
