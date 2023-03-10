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
                    <li class="pcoded-hasmenu">
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
                            <li class="">
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
                    <li class="pcoded-hasmenu active pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                            <span class="pcoded-mtext">Extra</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="active">
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
                        <h5>Statistiques de vente</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Extra</a> </li>
                        <li class="breadcrumb-item"><a href="#!">Comptabilit??</a> </li>
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
                        <div class="col-xl-4 col-md-12">
                            <div class="card proj-t-card">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col-auto">
                                            <i class="far fa-calendar-check text-c-red f-30"></i>
                                        </div>
                                        <div class="col p-l-0">
                                            <h6 class="m-b-5">Recherche</h6>
                                            <h6 class="m-b-0 text-c-red">par date</h6>
                                        </div>
                                    </div>
                                    <form id="byDate">
                                        @csrf
                                        <div class="row align-items-center text-center">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <input id="date" class="form-control" type="date" />
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary m-b-0">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h6 class="pt-badge bg-c-red"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card proj-t-card">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col-auto">
                                            <i class="far fa-calendar-check text-c-green f-30"></i>
                                        </div>
                                        <div class="col p-l-0">
                                            <h6 class="m-b-5">Recherche</h6>
                                            <h6 class="m-b-0 text-c-green">par mois</h6>
                                        </div>
                                    </div>
                                    <form id="byMonth">
                                        @csrf
                                        <div class="row align-items-center text-center">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <input id="month" class="form-control" type="month" />
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary m-b-0">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h6 class="pt-badge bg-c-green"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card proj-t-card">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col-auto">
                                            <i class="far fa-calendar-check text-c-yellow f-30"></i>
                                        </div>
                                        <div class="col p-l-0">
                                            <h6 class="m-b-5">Recherche</h6>
                                            <h6 class="m-b-0 text-c-yellow">par ann??e</h6>
                                        </div>
                                    </div>
                                    <form id="byYear">
                                        @csrf
                                        <div class="row align-items-center text-center">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <input id="year" class="form-control" type="text" />
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary m-b-0">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h6 class="pt-badge bg-c-yellow"></h6>
                                </div>
                            </div>
                        </div>
                        <div id="profit" class="col-xl-8 col-md-6"></div>
                    </div>
                    <!-- [ page content ] end -->
                </div>
            </div>
        </div>
    </div>
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

    <script>
        toastr.options = {
          "closeButton": true,
          "newestOnTop": true,
          "positionClass": "toast-top-right"
        };

        $('#byDate').submit(function(e) {
            e.preventDefault();
            let date = $('#date').val();
            let choice = "jour";
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('search.date') }}",
                type: "get",
                data: {date:date, choice:choice, _token:_token},
                success: function(response) {
                    $('#byDate')[0].reset();
                    $('#profit').html(response);
                }
            })
        })

        $('#byMonth').submit(function(e) {
            e.preventDefault();
            let month = $('#month').val();
            let choice = "mois";
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('search.month') }}",
                type: "get",
                data: {month:month, choice:choice, _token:_token},
                success: function(response) {
                    $('#byMonth')[0].reset();
                    $('#profit').html(response);
                }
            })
        })

        $('#byYear').submit(function(e) {
            e.preventDefault();
            let year = $('#year').val();
            let choice = "an";
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('search.year') }}",
                type: "get",
                data: {year:year, choice:choice, _token:_token},
                success: function(response) {
                    $('#byYear')[0].reset();
                    $('#profit').html(response);
                }
            })
        })
    </script>
@endsection