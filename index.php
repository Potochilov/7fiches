<?php
/* The class show info about php7 fiches and generate image for example.
 * Just paste fiche from list
 * Argon2
 * array_key_first
 * array_key_last
 * Assigning_Union_Operator
 * Arrow_functions
 * is_countable
 */

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$fiche = new \classes\ShowFiche('is_countable');
echo $fiche->showFiche();