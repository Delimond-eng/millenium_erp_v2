@extends("layouts.app")
@section("styles")
<link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section("content")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="d-flex mb-3 flex-wrap">
            <div class="align-items-center me-auto sm-mb-0 mb-2">
                <h4 class="card-title">Liste des Factures</h4>
                <span class="fs-14">Lorem ipsum dolor sit amet, consectetur</span>
            </div>
            <a href="/facture_create" class="btn btn-primary btn-sm  mb-4 me-2"><i class="fa fa-plus me-3 scale2"></i>Nouvelle facture</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive fs-14">
                    <table class="table card-table display mb-4 dataTablesCard " id="example5">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll">
                                        </label>
                                    </div>
                                </th>
                                <th>REF.</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>TTC</th>
                                <th>Montant Payé</th>
                                <th>Note de crédit</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($factures as $aff)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                        </label>
                                    </div>
                                </td>
                                <td><span class="text-black font-w600">#{{ $aff->ref }}</span></td>
                                <td><span class="text-black text-nowrap">{{ $aff->date }}</span></td>
                                <td>
                                    <div>
                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap"> {{ reduceText($aff->libelle, 30)  }}</h6>
                                        <span class="fs-14">{{ $aff->numero_cpte }}</span>
                                    </div>
                                </td>
                                <td><span class="text-black">{{$aff->total_du}}</span></td>
                                <td><span class="text-black">{{$aff->total_paye }}</span></td>
                                <td><span class="text-black">{{$aff->note_credit_montant }}</span></td>
                                <td><a href="javascript:void(0)" class="badge badge-sm {{ $aff->total_paye < $aff->total_du ? 'badge-danger' : 'badge-success'  }}" >{{ $aff->total_paye < $aff->total_du ? 'Non reglée' : 'Reglée' }}</a></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"> <i class="fa fa-pencil-alt me-2 text-primary"></i> Editer</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-print me-2 text-primary"></i> Imprimer</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-receipt me-2 text-info"></i> Note de crédit</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-trash me-2 text-danger"></i> Supprimer</a>
                                        </div>
                                    </div>
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
@endsection

@section("scripts")
<script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    // Activer le Datepicker
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd", // Format YYYY-MM-DD
        changeMonth: true,
        changeYear: true,
        autoclose: true,
        todayHighlight: true
    });

    // Initialisation du DataTable
    var table = $("#example5").DataTable({
        searching: true,
        paging: true,
        select: true,
        info: true,
        lengthChange: true,
        order: [[2, "desc"]],
        language: {
            searchPlaceholder: "Rechercher un élément...",
            sProcessing: "Traitement en cours...",
            sLengthMenu: "Afficher _MENU_ éléments",
            sZeroRecords: "Aucun élément correspondant trouvé",
            sInfo: "Affichage de _START_ à _END_ sur _TOTAL_ éléments",
            sInfoEmpty: "Affichage de 0 à 0 sur 0 éléments",
            sInfoFiltered: "(filtré de _MAX_ éléments au total)",
            sSearch: "",
            oPaginate: {
                sFirst: "Premier",
                sPrevious: "Précédent",
                sNext: "Suivant",
                sLast: "Dernier",
            },
            paginate: {
                next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
            },
        },
    });

    // Ajouter les champs de filtre
    $("#example5_filter").append(`
        <input type="text" id="minDate" class="datepicker form-control" style="width: 120px; margin-left: 10px;" placeholder="Date début">
        <input type="text" id="maxDate" class="datepicker form-control" style="width: 120px; margin-left: 5px;" placeholder="Date fin">
        <button id="dateClearBtn" class="btn btn-outline-primary btn-sm" style="height:2.5rem; border-radius:3px; margin-left:5px">
            Tout
        </button>
    `);
    $("#example5_filter").addClass("d-flex");

    // Activer le Datepicker après ajout dynamique
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        autoclose: true,
        todayHighlight: true
    });

    // Fonction de filtrage des dates
    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var minDate = $("#minDate").val();
        var maxDate = $("#maxDate").val();
        var dateStr = data[2]; // Colonne contenant la date (index 2)

        if (!dateStr) return false; // Ignorer les lignes sans date

        var date = new Date(dateStr);

        if (minDate && !maxDate) {
            // Si seule la date de début est renseignée, afficher tout à partir de cette date
            return date >= new Date(minDate);
        } else if (minDate && maxDate) {
            // Si une plage de dates est définie, filtrer dans l'intervalle
            return date >= new Date(minDate) && date <= new Date(maxDate);
        }
        return true; // Sinon, afficher tout
    });

    // Appliquer le filtre lors de la sélection des dates
    $("#minDate, #maxDate").on("change", function () {
        table.order([2, "asc"]).draw(); // Réordonner par date ASC
    });

    $("#dateClearBtn").on("click", function () {
        $("input").val(""); 
        table.order([2, "asc"]).draw();
    });
});

</script>
@endsection