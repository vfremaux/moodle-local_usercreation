<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Initially developped for :
 * Université de Cergy-Pontoise
 * 33, boulevard du Port
 * 95011 Cergy-Pontoise cedex
 * FRANCE
 *
 * Create the accounts of students and teachers based on xml files and fill tables used for statistics.
 *
 * @package   local_usercreation
 * @copyright 2017 Laurent Guillet <laurent.guillet@u-cergy.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * File : lang/fr/local_usercreation.php
 * French language file
 */
$string['createusers'] = "Création de tout les comptes";
$string['pluginname'] = "Création des utilisateurs";
$string['year'] = "Année à utiliser pour la création des comptes étudiants";
$string['youretwin'] = '<br>Un autre utilisateur a le même identifiant que vous.'
        . ' En conséquence, nous ne sommes pas en mesure de vous distinguer.<br>'
        . 'Un message vient d\'être envoyé aux services compétents pour signaler ce problème.'
        . ' Vous (ou l\'autre utilisateur) recevrez bientôt un nouvel identifiant.';
$string['privacy:metadata:local_usercreation_type'] = 'Table des types d\'enseignants.';
$string['privacy:metadata:local_usercreation_type:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:local_usercreation_type:typeteacher'] = 'Type d\'enseignant'
        . ' de l\'utilisateur.';
$string['privacy:metadata:local_usercreation_vet'] = 'Table des VETs des utilisateurs.';
$string['privacy:metadata:local_usercreation_vet:studentid'] = 'ID de l\'étudiant.';
$string['privacy:metadata:local_usercreation_vet:vetname'] = 'Nom de la VET.';
$string['privacy:metadata:local_usercreation_vet:vetcode'] = 'Code de la VET.';
$string['privacy:metadata:local_usercreation_ufr'] = 'Table des UFRs des utilisateurs.';
$string['privacy:metadata:local_usercreation_ufr:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:local_usercreation_ufr:ufrcode'] = 'Code de l\'UFR.';
