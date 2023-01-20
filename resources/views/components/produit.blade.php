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
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="files/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="files/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/component.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.19/sweetalert2.min.css" integrity="sha512-riZwnB8ebhwOVAUlYoILfran/fH0deyunXyJZ+yJGDyU0Y8gsDGtPHn1eh276aNADKgFERecHecJgkzcE9J3Lg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
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
                    <li class="pcoded-hasmenu active pcoded-trigger">
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
                            <li class="active">
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
                                    <span class="pcoded-mtext">Commande validée</span>
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
                        <h5>Produits Disponible</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Produits</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Consulter Catégorie</a>
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
                            <!-- Default ordering table start -->
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-info waves-effect" data-toggle="modal" data-target="#product-Modal">Nouveau Produit</button>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="example2" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Catégorie</th>
                                                    <th>Prix</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($produits as $produit)
                                                <tr id="sid{{ $produit->id }}">
                                                    <td>{{ $produit->produit_nom }}</td>
                                                    <td>{{ $produit->produit_categorie }}</td>
                                                    <td>{{ $produit->produit_prix }}</td>
                                                    <td style="text-align: center">
                                                        <a href="javascript:void(0)" onclick="editProduit({{ $produit->id }})" class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></a>
                                                        <a href="javascript:void(0)" onclick="deleteProduit({{ $produit->id }})" class="feather icon-trash-2 f-w-600 f-16 text-c-red"></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Default ordering table end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <!-- Modals begin -->
        <div class="modal fade" id="product-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nouveau Produit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form_add_product">
                            @csrf
                            <div class="form-group row">
                              <div class="col-sm-12">
                                <input type="text" class="form-control" id="produit" placeholder="Nom du Produit">
                              </div>
                            </div>
                            <div class="form-group row">
                                {{-- <div class="col-sm-12">
                                    <select id="choice" name="select" class="form-control">
                                        <option value="">Choisissez une catégorie</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->produit_categorie }}">{{ $category->produit_categorie }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="choice" placeholder="Catégorie de l'article">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="prix" placeholder="Prix Unitaire (PU)">
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
        <!-- Modals begin -->
        <div class="modal fade" id="product-edit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifier Produit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form_edit_product">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="form-group row">
                              <div class="col-sm-12">
                                <input type="text" class="form-control" id="produit_up" placeholder="Nom du Produit">
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <select id="choice_up" name="select" class="form-control">
                                        <option value="">Choisissez une catégorie</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->produit_categorie }}">{{ $category->produit_categorie }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="prix_up" placeholder="Prix Unitaire (PU)">
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
        <div id="styleSelector">

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
    <!-- modernizr js -->
    <script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="files/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="files/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="files/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="files/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Custom js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.19/sweetalert2.all.min.js" integrity="sha512-GmIrnMvDZVTtxE+7SdmKjUr3sSvwPMtitw6osbORBDp9sKneGyB3ZjcGjNfrUQ1SlpJXET+z5Cfb0QAj678izA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.js"></script>
    <script>
        $(function () {
          $("#example2").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false
          });
        });
    </script>
    <script>
        toastr.options = {
          "closeButton": true,
          "newestOnTop": true,
          "positionClass": "toast-top-right"
        };
        $('#form_add_product').submit(function(e) {
            e.preventDefault();

            let produit = $("#produit").val();
            let choice = $("#choice").val();
            let prix = $("#prix").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('register.product') }}",
                type: "post",
                data: {produit:produit, choice:choice, prix:prix, _token:_token},
                success: function(response) {
                    if (response) {
                        $('#example2 tbody').prepend('<tr><td>'+ response.produit_nom +'</td><td>'+ response.produit_categorie +'</td><td>'+ response.produit_prix +'</td><td style="text-align: center"><a href="javascript:void(0)" class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></a><a href="javascript:void(0)" class="feather icon-trash-2 f-w-600 f-16 text-c-red"></a></td></tr>');
                        $('#form_add_product')[0].reset();
                        $('#product-Modal').modal('hide');
                        toastr.success(response.success);
                    }
                }
            })
        })
    </script>
    <script>
        function editProduit(id) {
            $.get('get-produit/'+id, function(produit) {
                $('#id').val(produit.id);
                $('#produit_up').val(produit.produit_nom);
                $('#choice_up').val(produit.produit_categorie);
                $('#prix_up').val(produit.produit_prix);
                $('#product-edit').modal('toggle');
            });

            $('#form_edit_product').submit(function(e) {
            e.preventDefault();
            
            let id = $("#id").val();
            let produit = $("#produit_up").val();
            let choice = $("#choice_up").val();
            let prix = $("#prix_up").val();
            let _token = $("input[name=_token]").val();

                $.ajax({
                    url: "{{ route('update.prod') }}",
                    type: "put",
                    data: {id:id, produit:produit, choice:choice, prix:prix, _token:_token},
                    success: function(response) {
                        if (response) {
                            $('#sid' + response.id + ' td:nth-child(1)').text(response.produit_nom);
                            $('#sid' + response.id + ' td:nth-child(2)').text(response.produit_categorie);
                            $('#sid' + response.id + ' td:nth-child(3)').text(response.produit_prix);
                            $('#form_edit_product')[0].reset();
                            $('#product-edit').modal('hide');
                            toastr.success(response.success);
                        }
                    }
                })
        })
        }
    </script>
    <script>
        function deleteProduit(id) {
            swal.fire({
                title: "Êtes-vous sur de vouloir supprimé?",
                text: "Confirmez votre choix!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Oui!",
                cancelButtonText: "Non!"
            }).then(function (e) {
                if (e.value === true) {
                    $.ajax({
                        url: "delete-produit/"+id,
                        type: "delete",
                        data: {_token: $("input[name=_token]").val()},
                        success: function(response) {
                            if (response) {
                                $('#sid' + id).remove(); 
                                toastr.success(response.success);
                            }
                        }
                    })
                }
            })
        }
    </script>
@endsection