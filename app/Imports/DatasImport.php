<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DatasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'numero' => $row[0],
            'matricule' => $row[1],
            'nom' => $row[2],
            'prenom' => $row[3],
            'centre_zone' => $row[4],
            'department' => $row[5],
            'sous_depart' => $row[6],
            'services' => $row[7],
            'categories' => $row[8],
            'fonctions' => $row[9],
            'qualifications' => $row[10],
            'annee' => $row[11],
            'mois' => $row[12],
            'ref_paie' => $row[13],
            'jour_trav' => $row[14],
            'heures_normales' => $row[15],
            'nbre_heure_supp' => $row[16],
            'taux_horaires' => $row[17],
            'salaire_base' => $row[18],
            'anciennete' => $row[19],
            'allocations_conges' => $row[20],
            'heure_supp' => $row[21],
            'idem_speciale' => $row[22],
            'idem_solidarite' => $row[23],
            'sursalaire' => $row[24],
            'prime_cantine' => $row[25],
            'prime_heure' => $row[26],
            'salaire_brut' => $row[27],
            'avan_nature' => $row[28],
            'cot_salariales' => $row[29],
            'cot_expat_salariale' => $row[30],
            'impots' => $row[31],
            'asuurance_maldie' => $row[32],
            'avance_sur_salaire' => $row[33],
            'report' => $row[34],
            'arrondi' => $row[35],
            'net_payer' => $row[36],
            'cot_patronales' => $row[37],
            'cfe' => $row[38],
            'tfp' => $row[39],
            'tej' => $row[40],
            'tl' => $row[41],
            'cot_expat_patronales' => $row[42],
            'assurance_maldie' => $row[43],

        ]);
    }
}
