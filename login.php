<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Halaman Login</title>
</head>
<body style="background-color:#E5E0E0;">
    <div class="container">
        <div class="row">
            <!-- Logo di sebelah kiri -->
            <div class="col-md-4 py-5">
                <img src="./images/Ellipse 3.png" alt="Logo Toko" class="img-fluid mt-5">
            </div>

            <!-- Form login di tengah -->
            <div class="col-md-8">
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-md-6 mt-5">

                    <!-- form login -->
                        <form class="mb-2">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="registrasi.php" class="btn btn-primary">Sign In</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
