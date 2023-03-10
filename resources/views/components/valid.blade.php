@extends('layout')

@section('styles')
    <!-- Favicon icon -->
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('sidebar')
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="nav-list">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigation-label">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                            <span class="pcoded-mtext">Produits</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="consulter-stock" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Consulter Stock</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="consulter-categorie" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Consulter Cat??gorie</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="consulter-produit" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Consulter Produit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu active pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                            <span class="pcoded-mtext">Commandes</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="order-list" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Commande en cours</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="order-valid" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Commande valid??e</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="create-commande" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Ajouter Commande</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                            <span class="pcoded-mtext">Extra</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="view-budget" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Comptabilit??</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="recent-activite" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Historique des actions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
@endsection

@section('content')
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Commandes effectu??es</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Commande</a> </li>
                        <li class="breadcrumb-item"><a href="#!">Consulter Commande</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <!-- [ page content ] start -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Commande Disponible</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Client</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td>{{ $data->reference }}</td>
                                                    <td>{{ $data->client_name }}</td>
                                                    <td>{{ $data->commande_debut }}</td>
                                                    <td>
                                                        <label class="badge badge-inverse-success">{{ $data->status }}</label>
                                                    </td>
                                                    <td>
                                                        <a href="preview-invoice/{{ $data->id }}" class="btn btn-inverse btn-round waves-effect waves-light"target="_blank">Voir Facture</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ page content ] end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modals begin -->
    <div class="modal fade" id="preview-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Commande N??: <b class="ref"></b>  </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h5></h5>
                        </div>
                        <div class="card-block">
                            <div class="row mb-4">
                                <h6 class="name">Client:</h6>
                                <h6 class="phone">Contact:</h6>
                                <h6 class="article">Produit:</h6>
                            </div>
                        </div>
                    </div>
                    <form id="form_add_cash">
                        @csrf
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="number" class="form-control" id="deposit" placeholder="Montant">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary m-b-0">Valider</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals end -->
</div>
@endsection

@section('scripts')
    <!-- Required Jquery -->
    <script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- Custom js -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vertical/vertical-layout.min.js"></script>
    
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
@endsection