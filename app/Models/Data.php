<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'matricule',
        'nom',
        'prenom',
        'centre_zone',
        'department',
        'sous_depart',
        'services',
        'categories',
        'fonctions',
        'qualifications',
        'annee',
        'mois',
        'ref_paie',
        'jour_trav',
        'heures_normales',
        'nbre_heure_supp',
        'taux_horaires',
        'salaire_base',
        'anciennete',
        'allocations_conges',
        'heure_supp',
        'idem_speciale',
        'idem_solidarite',
        'sursalaire',
        'prime_cantine',
        'prime_heure',
        'salaire_brut',
        'avan_nature',
        'cot_salariales',
        'cot_expat_salariale',
        'impots',
        'asuurance_maldie',
        'avance_sur_salaire',
        'report',
        'arrondi',
        'net_payer',
        'cot_patronales',
        'cfe',
        'tfp',
        'tej',
        'tl',
        'assurance_maldie'
    ];
}
