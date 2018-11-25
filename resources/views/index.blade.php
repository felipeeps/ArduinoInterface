<!DOCTYPE html>
<html lang="pt-BR">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto Arduino</title>

    <!-- Bootstrap core CSS-->
    <link href="{{url('css/bootstrap.min.css') }}" rel="stylesheet">    
    <!-- Custom fonts for this template-->
    <link href="{{ url('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/custom.css') }}">


  </head>

  <body id="page-top">

    <nav id="menuSuperior" class="navbar navbar-expand static-top">
      <a id ="textoMenuSuperior" class="navbar-brand mr-1" href="index.html">Projeto Arduino</a>
    </nav>

    <div id="wrapper">
      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div id="boxData" class="card text-white o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5">Box - Data</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Text - Data Desc</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>

            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div id="boxUnidades" class="card text-white o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5">Box Unidades</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Toras Processadas por dia</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div id="boxFaturamento" class="card text-white o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5">Texto Faturamento</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Faturamento Diário</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div id="boxProducao" class="card text-white o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5">Texto - Produção</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Produção Diária</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Gráfico Exemplo</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Desenvolvido por Felipe Pereira </span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
