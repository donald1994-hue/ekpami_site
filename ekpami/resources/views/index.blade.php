<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
     <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/duotone.css">
    <link rel="stylesheet" href="../resources/css/fontawesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../resources/css/fontawesome.min.css">
    <title>Acceuil-Enakpami</title>
  </head>

  <body>

    <!-- Navbar -->
        @include('/navigation.nav')
    <!-- Navbar -->

    <!-- content -->
    <div class="container-fluid " >
      <div class="column-layout ">
        @include('/contenu.index')
        @include('/sidebare.sidebar-one')
        @include('/sidebare.sidebar-two')
      </div>
    </div>
    <!-- content -->

    <!-- footer -->

      @include('/footer.footer')

    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../resources/js/app.js"></script>
    <script src="../resources/js/fontawesome.min.js"></script>
    <script src="../resources/js/all.min.js"></script>
    <script type="text/javascript" src="../resources/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../resources/js/popper.min.js"></script>
    <script src="../resources/js/bootstrap.min.js"></script>

  <!--  </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  -->
  </body>

</html>
