<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class FactureController {
    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function viewFacs() {
        $factures = Capsule::table('factures')
            ->join('compte', function ($join) {
                $join->on('factures.client', '=', 'compte.libelle2')
                    ->where('compte.numero_cpte', 'LIKE', '41%');
            })
            ->leftJoin('facture_note_credit', 'factures.ref', '=', 'facture_note_credit.note_facture_ref')
            ->select(
                'factures.*',
                'compte.libelle',
                'compte.libelle2',
                'compte.numero_cpte',
                Capsule::raw('COALESCE(facture_note_credit.note_montant, 0) AS note_credit_montant')
            )
            ->where('factures.proforma', 0)
            ->orderByDesc('factures.id')
            ->get();
        echo $this->view->make('pages.fac.facList', ["factures"=>$factures])->render();
    }
    public function createFacView() {
        $comptes = Capsule::table('compte')->get();
        echo $this->view->make('pages.fac.facCreate', ['comptes'=>$comptes])->render();
    }
}