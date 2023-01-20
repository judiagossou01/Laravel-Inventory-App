@extends('layout')

@section('styles')
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- feather icon -->
<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
<!-- Date-time picker css -->
<link rel="stylesheet" type="text/css" href="files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
<!-- Date-range picker css  -->
<link rel="stylesheet" type="text/css"
    href="files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" />
<!-- list css -->
<link rel="stylesheet" type="text/css" href="../files/assets/pages/list-scroll/list.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/stroll/css/stroll.css">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
<link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
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
                                <span class="pcoded-mtext">Consulter Catégorie</span>
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
                        <li class="">
                            <a href="order-valid" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Commande validée</span>
                            </a>
                        </li>
                        <li class="active">
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
                                <span class="pcoded-mtext">Comptabilité</span>
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
                    <i class="feather icon-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Faire une commande</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Commande</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Ajouter Commande</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Default Date-Picker card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Nouvelle Commande</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code>
                                        tag</span>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="{{ route('create.invoice') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                <h4 class="sub-title">Date de la commande</h4>
                                                <input name="date_invoice" class="form-control" type="date" />
                                            </div>
                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                <h4 class="sub-title">Adresse du client</h4>
                                                <input name="addrcli" class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                <h4 class="sub-title">Nom du client</h4>
                                                <input name="nomcli" class="form-control" type="text" />
                                            </div>
                                            <div class="col-sm-12 col-xl-4">
                                                <h4 class="sub-title">Contact du client</h4>
                                                <input name="telcli" class="form-control" type="text" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 m-b-30">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Ajouter Produits</h5>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Désignation</th>
                                                                        <th>Quantité</th>
                                                                        <th>Prix</th>
                                                                        <th>Total</th>
                                                                        <th><a id="add_more" href="javascript:void(0)" class="btn waves-effect waves-light btn-success btn-icon" style="padding-top: 4px; padding-left: 8px;"><i class="fa fa-plus"></i></a></th>                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="fill">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>
                                                                            <select name="product[]" id="product" class="form-control product-list">
                                                                                <option>Choisissez un produit</option>
                                                                                @foreach ($products as $product)
                                                                                    <option data-price="{{ $product->produit_prix }}" value="{{ $product->id }}">{{ $product->produit_nom }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td><input style="width: 70px" id="quantite" name="quantite[]" class="qty" type="number"></td>
                                                                        <td><input style="width: 70px" id="price" name="price[]" class="price" type="number"></td>
                                                                        <td><input style="width: 90px" id="total" name="total[]" class="total_amount" type="number"></td>
                                                                        <td><a id="delete" href="javascript:void(0)" class="btn waves-effect waves-light btn-danger btn-icon" style="padding-top: 4px; padding-left: 8px;"><i class="fa fa-times"></i></a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Both borders table end -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="offset-xl-9 col-xl-3">
                                                <div class="card prod-p-card card-red">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">Total</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white total">0.00 </h3>
                                                                <h3 class="m-b-0 f-w-700 text-white">FCFA</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Default Date-Picker card end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Bootstrap date-time-picker js -->
<script type="text/javascript" src="files/assets/pages/advance-elements/moment-with-locales.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript" src="files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
<!-- Date-range picker js -->
<script type="text/javascript" src="files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>
<!-- list-scroll js -->
<script src="files/bower_components/stroll/js/stroll.js"></script>
<script type="text/javascript" src="files/assets/pages/list-scroll/list-custom.js"></script>

<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="files/assets/js/script.js"></script>

<script>
    $("#add_more").click(function() {
        var product = $('.product-list').html();
        var number = ($('#fill tr').length - 0) + 1;
        $('#fill').append('<tr><th scope="row">' + number + '</th><td><select name="product[]" class="form-control product-list">' + product + '</td><td><input style="width: 70px" name="quantite[]" class="qty" type="number"></td><td><input style="width: 70px" name="price[]" class="price" type="number"></td><td><input class="total_amount" style="width: 90px" name="total[]" type="number"></td><td><a id="delete" href="javascript:void(0)" class="btn waves-effect waves-light btn-danger btn-icon" style="padding-top: 4px; padding-left: 8px;"><i class="fa fa-times"></i></a></td></tr>');
    });

    $("#fill").delegate('#delete', 'click', function() {
        $(this).parent().parent().remove();
    })

    function TotalAmount() {
        var total = 0;
        $('.total_amount').each(function(i, e) {
            var amount = $(this).val() - 0;
            total += amount;
        })
        $('.total').html(total); //Pour afficher le total
    }

    $("#fill").delegate('.product-list', 'change', function() {
        var tr = $(this).parent().parent();
        var price = tr.find('.product-list option:selected').attr('data-price');
        tr.find('.price').val(price);
        var qty = tr.find('.qty').val() - 0;
        var price = tr.find('.price').val() -0;
        var total_amount = qty * price;
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    })

    $("#fill").delegate('.qty', 'keyup', function() {
        var tr = $(this).parent().parent();
        var qty = tr.find('.qty').val() - 0;
        var price = tr.find('.price').val() -0;
        var total_amount = qty * price;
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    })
</script>

@endsection
