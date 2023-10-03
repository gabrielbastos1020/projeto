<?php
session_start();

require('./php/controller/sessao_controller.php');

SessaoController::validarAdmin();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cursos Coordenados</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Adicione estilos para os ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sucelson Academy</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="./">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Cursos</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="login.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sair</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="login.php">Sair</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="docentesAdm.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Docentes</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="discentesAdm.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Discentes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cargo: Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card-header py-3">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">CURSOS COORDENADOS - CIÊNCIA DA COMPUTAÇÃO | 1° SEMESTRE - 2023</h6>
                                <a href="adicionarCursoAdm.php"><button id="addCursoButton" class="btn btn-primary">Adicionar Curso</button></a>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Código da Disciplina</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Modelagem</td>
                                            <td>86516871</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="editarCurso(this)">
                                                    <i class="fas fa-pencil-alt"></i> Editar
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="excluirCurso(this)">
                                                    <i class="fas fa-trash-alt"></i> Excluir
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Banco de Dados</td>
                                            <td>59125535</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="editarCurso(this)">
                                                    <i class="fas fa-pencil-alt"></i> Editar
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="excluirCurso(this)">
                                                    <i class="fas fa-trash-alt"></i> Excluir
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lógica</td>
                                            <td>74381540</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="editarCurso(this)">
                                                    <i class="fas fa-pencil-alt"></i> Editar
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="excluirCurso(this)">
                                                    <i class="fas fa-trash-alt"></i> Excluir
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Algaritmos</td>
                                            <td>04238418</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="editarCurso(this)">
                                                    <i class="fas fa-pencil-alt"></i> Editar
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="excluirCurso(this)">
                                                    <i class="fas fa-trash-alt"></i> Excluir
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Editar Curso Modal -->
    <div class="modal fade" id="editarCursoModal" tabindex="-1" role="dialog" aria-labelledby="editarCursoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarCursoModalLabel">Editar Curso</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Adicione aqui os campos de edição do curso -->
                    <form>
                        <div class="form-group">
                            <label for="nomeCurso">Nome do Curso</label>
                            <input type="text" class="form-control" id="nomeCurso" placeholder="Nome do Curso">
                        </div>
                        <div class="form-group">
                            <label for="codigoCurso">Código da Disciplina</label>
                            <input type="text" class="form-control" id="codigoCurso" placeholder="Código da Disciplina">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="button" onclick="salvarEdicaoCurso()">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Manipular a edição e exclusão de cursos -->
    <script>
        var cursoEditando = null;

        function editarCurso(button) {
            // Recuperar a linha da tabela
            var row = button.closest("tr");

            // Recuperar os valores atuais do curso
            var nomeCurso = row.cells[0].innerText;
            var codigoCurso = row.cells[1].innerText;

            // Preencher o modal de edição com os valores atuais
            document.getElementById("nomeCurso").value = nomeCurso;
            document.getElementById("codigoCurso").value = codigoCurso;

            // Armazenar a linha do curso que está sendo editado
            cursoEditando = row;

            // Mostrar o modal de edição
            $('#editarCursoModal').modal('show');
        }

        function salvarEdicaoCurso() {
            if (cursoEditando) {
                // Atualizar os valores na tabela com os novos valores do modal de edição
                cursoEditando.cells[0].innerText = document.getElementById("nomeCurso").value;
                cursoEditando.cells[1].innerText = document.getElementById("codigoCurso").value;

                // Fechar o modal de edição
                $('#editarCursoModal').modal('hide');
            }
        }

        function excluirCurso(button) {
            if (confirm("Tem certeza de que deseja excluir este curso?")) {
                // Implemente a lógica para excluir o curso aqui (por exemplo, remover a linha da tabela).
                var row = button.closest("tr");
                row.remove();
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>