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
    <title>Profile</title>
    <link href="assets/profile.css" rel="stylesheet">
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
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/userViewProfile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff; font-size: 16px;" href="/">Logout</a>
                </li>
            </ul>
        </nav>       
    </div>
    
    <div class="container">
        <div class="text-center">
            <div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
                <h3 class="font-weight-bold my-4"><b>STUDENT PROFILE</b></h3>
            </div>
            <img src="https://i.pinimg.com/originals/7c/2b/b9/7c2bb9ffda7c14938f354bb42a56812f.jpg" class="rounded-circle border border-3" width="150">
            <a style="color: #A9A9A9;" href=""><h6>edit picture</h6></a>
        </div>
    </div>

    <div class="col-md-8 container">
        <div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-5 text-secondary">
                        Jeman Na
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NIM</h6>
                    </div>
                    <div class="col-sm-5 text-secondary">
                        1301190234
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Status</h6>
                </div>
                <div class="col-sm-5 text-secondary">
                    Mahasiswa
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-info " target="__blank" href="/userEditProfile">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\tubes2\resources\views/userViewProfile.blade.php ENDPATH**/ ?>