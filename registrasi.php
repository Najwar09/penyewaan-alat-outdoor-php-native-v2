


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
                        <form class="mb-2" method="post" action="proses.php?id=registrasi">
                            <div class="form-group">
                                <label for="username">Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="pass" maxlength="8" pattern=".{8}" title="Password minimal 8 karakter" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                            <a href="login.php" class="btn btn-danger">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
