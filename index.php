<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Sistem Informasi Pengajuan Surat Keterangan DO - Politeknik Negeri Cilacap</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
  <style></style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/header.css" rel="stylesheet" />

  <style>
    body {
      background-image: url('logo\ koperas.png') ;
      /* Replace 'path/to/' with the actual path to your image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      /* Optional: This will make the background fixed */
    }
  </style>
</head>

<body>
  <main class="">


    <!-- ***** Header Area End ***** -->
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"
              >

              <!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body" >
                  <div class="pt-4 pb-2" >
                    <div class="d-flex justify-content-center py-4">
                      <a class="logo d-flex align-items-center w-auto">
                        <span>Koperasi Sidaurip</span>
                      </a>
                    </div>
                    <p class="text-center small">
                      Masukkan Username dan Password untuk masuk
                    </p>
                  </div>

                  <div id="alertContainer"></div>

                  <?php
                  if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'gagal') {
                      $error_message = "Gagal Login, username atau password salah";
                    } else if ($_GET['pesan'] == 'logout') {
                      $error_message = "Anda sudah logout";
                    } else if ($_GET['pesan'] == 'belum_login') {
                      $error_message = "Anda harus login dahulu untuk mengakses halaman admin";
                    }
                  }
                  ?>


                  <form method="post" action="login_aksi.php" name="formlogin">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"></span>
                        <input type="text" name="nama" class="form-control" />
                        <div class="invalid-feedback">
                          Please enter your username.
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"></span>
                        <input type="password" name="katakunci" class="form-control" />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                      </div>

                      <div class="col-12">
                        <br>

                        <button class="btn w-100" input type="submit" name="tombollogin" value="LOGIN" style="background-color: #22B3C1; 
                        color: #FFFFFF;">
                          Login
                        </button>
                        <input type="hidden" id="error_message"
                          value="<?php echo isset($error_message) ? $error_message : ''; ?>">
                        <script>
                          // Get the error message value from the hidden input
                          var errorMessage = document.getElementById("error_message").value;

                          // Check if there's an error message
                          if (errorMessage) {
                            // Display the error message as a pop-up
                            alert(errorMessage);
                          }
                        </script>

                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>

</body>

</html>