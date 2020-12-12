<?php
/**
 *
 * Extensions .yml check. An extension for the phpBB Forum Software package.
 * French translation by Galixte (https://www.galixte.com)
 *
 * @copyright (c) 2020 david63
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CLICK_DONATE'				=> 'Effectuer un don',

	'DONATE'					=> 'Donation',
	'DONATE_EXTENSIONS'			=> 'Faire un don pour cette extension',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Cette extension comme toutes celles de l’auteur est entièrement gratuite. Si cette extension est bénéfique pour le forum, alors il peut être intéressant de faire un don en cliquant sur le bouton PayPal, ou via l’image QR « Scan, Pay, Go » - Ce geste sera grandement apprécié. Bien que toute donation soit toujours la bienvenue, l’auteur s’engage à l’avenir à ne pas envoyer de contenu indésirable ni de demande de donation.',

	'NEW_VERSION'				=> 'Nouvelle version - %s',
	'NEW_VERSION_EXPLAIN'		=> 'Une nouvelle version %1$s pour cette extension est disponible au téléchargement.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Lien de téléchargement',
	'NO_JS'						=> 'Il apparait que le langage JavaScript est désactivé.<br>Merci de <a href="https://enablejavascript.co/">l’activer</a> dans le navigateur Web pour bénéficier de toutes les fonctionnalités disponibles sur cette page.',
	'NO_VERSION_EXPLAIN'		=> 'Il n’y a pas d’information concernant la mise à jour de cette extension.',

	'PAYPAL_BUTTON'				=> 'Faire un don via le bouton PayPal',
	'PAYPAL_TITLE'				=> 'PayPal - Envoyer et recevoir des paiements en ligne de manière pratique, sécurisée et peu couteuse.',
	'PHP_NOT_VALID'				=> 'La version du langage PHP n’est pas compatible avec cette extension.',
	'PHPBB_NOT_VALID'			=> 'La version de phpBB utilisée par ce forum n’est pas compatible avec cette extension.',

	'VERSION'					=> 'Version',
));
