<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="assets/css/main2.css" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar" style="background-color: #ed212b;">
            <ul class="nav justify-content">
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 25px;" href=""><b>TelU Guide</b></a>
                </li>
            </ul>
            <ul class="nav justify-content-rigth">
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/map">Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/securityInfo">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/">Logout</a>
                </li>
            </ul>
        </nav>        
    </div>

    <div class="section-header">
        <h1> Security Profile </h1>
    </div>

    <div class="container">
        <div class="profile-box">
            <img src="assets/img/jamal.jpg" alt="Profil User" style="width: 125px; border-radius: 50%; background: #fff; padding: 6px;">
            <h3>Jung Jamal <br/> Security <br /> +628123456789</h3>
        </div>

        <div class="item-box">
            <span>
                <img src="assets/img/scan-pic.png" alt="" style="flex-grow: 1">
            </span> 
            <div class="profile-data" style="flex-grow: 15">
                <h3>Scan QR Code</h3>
            </div>
            <span>
                <img src="assets/img/arrow-pic.png" alt="" style="flex-grow: 1">
            </span>
        </div>
        
        <div class="item-box">
            <span>
                <img src="assets/img/person-pic.png" alt="" style="display: flex; align-items: flex-start;">
            </span>
            <div class="profile-data" style="flex-grow: 15">
                <h3>Edit Profile</h3>
            </div>
            <span>
                <img src="assets/img/arrow-pic.png" alt="" style="flex-grow: 1">
            </span>
        </div>

        <div class="item-box">
            <span>
                <img src="assets/img/logout.png" alt="" style="display: flex; align-items: flex-start;">
            </span> 
            <div class="profile-data">
                <h3>Logout</h3>
            </div>
        </div>
    </div>
</body>
</html>