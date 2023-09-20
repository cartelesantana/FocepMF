<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login-Focep MF</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="assets/img/logo.jpg"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-top: 50px">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" >
                                    <div class="card-header" style="background: Lightgreen">
                                        <h3 class="text-center font-weight-light my-4" style="font-weight:800; cursor:pointer;color: darkblue;font-size: 50px; font-family: monospace" >
                                            Login
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="controls/LoginAuth.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="inputName" type="text" placeholder="name@example.com" />
                                                <label for="inputName">Matricle</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Mot De Passe</label>
                                            </div>
                                            <div class="form-floating mb-3" >
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="usertype">
                                                    <option value="agent" selected>Agent</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="pages/forms/password.php">Forgot Password?</a>
                                                <button type="submit" name =" login" class="btn btn-primary" style=" border:0;background: darkgreen">
                                                    Login
                                                </button>
                                            </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
