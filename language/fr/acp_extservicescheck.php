<?php
/**
 *
 * Extensions .yml check. An extension for the phpBB Forum Software package.
 * French translation by Galixte (https://www.galixte.com)
 *
 * @copyright (c) 2019 david63
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
	$lang = array();
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
	'COMMON_ERRORS'					=> 'Erreurs courantes',
	'COMMON_ERRORS_EXPLAIN'			=> 'Les raisons couramment rencontrées pour les erreurs indiquées ci-dessus peuvent être :<hr>- Une apostrophe (guillemet simple) est manquante avant le caractère « @ » ou « % » (la fin des lignes concernées doit aussi comporter une apostrophe) ;<br>- Le terme « pattern » a été remplacé par « path » ;<br>- L’ensemble de mots « scope: prototype » est devenu « shared: false » ;<br>- L’ensemble de mots « scope: container » est devenu « shared: true » ;<br>- L’ensemble de mots « scope: request » a aussi été modifié mais il est nécessaire de le vérifier pour savoir quoi remplacer ;<br>- Si un espace est utilisé dans le nom de l’extension celui-ci sera rapporté comme non conforme lorsqu’il contient le caractère « _ » (appelé tiret bas, underscore en anglais).<hr>Si un doute persiste concernant la syntaxe à corriger ou sur la manière de procéder, merci de vérifier l’existence d’une nouvelle version de l’extension et dans le cas contraire de contacter l’auteur de l’extension sur phpBB.com, GitHub.com ou sur son forum de support.',
	'CONFIG_FILE_FAIL'				=> '<strong>Le fichier <em>%s</em> n’est pas conforme.</strong>',
	'CONFIG_FILE_PASS'				=> 'Le fichier <em>%s</em> semble conforme.',
	'COPY_CLIPBOARD'				=> 'Copier dans le presse-papier',

	'DISABLED'						=> 'Désactivée',
	'DISABLE_EXPLAIN'				=> 'Bouton permettant de désactiver l’extension.',
	'DORMANT'						=> 'Dormante',

	'ENABLED'						=> 'Activée',
	'ERROR_EXPLAIN'					=> 'Extension comprenant une ou plusieurs erreurs de syntaxe dans ses fichiers *.yml.',
	'EXTENSION_NAME'				=> 'Nom de l’extension',
	'EXTENSION_QUERY_EXPLAIN'		=> 'Extension présentant un problème dans son nom renseigné dans ses fichiers.',
	'EXT_SERVICES_CHECK'			=> 'Contrôle syntaxique des fichiers *.yml des extensions',
	'EXT_SERVICES_CHECK_EXPLAIN'	=> 'Afin d’être compatible avec phpBB 3.3.x, cette extension permet de vérifier la syntaxe de l’ensemble des fichiers <em>*.yml</em> de toutes les extensions présentes sur ce forum.<br>Aussi, un contrôle sera effectué sur l’espace utilisé dans les noms des extensions.
  <br><br>Les résultats de l’analyse effectuée par cette extension ne garantissent <strong>PAS</strong> que l’extension analysée est pleinement compatible avec phpBB 3.3, il est toujours possible que d’autres problèmes soient présents dans les fichiers <em>*.yml</em>.<br><br>Note : Une extension « Dormante » est une extension présente dans le répertoire <em>./ext/</em> n’étant ni activée, ni désactivée.',
	'EXT_STATUS'					=> 'Statut de l’extension',

	'FILE_EMPTY'					=> 'Le fichier <em>%s</em> est vide',
	'FILE_ERROR'					=> 'L’erreur suivante a été détectée lors de l’accès à %1$s<br>Erreur : %2$s',
	'FILE_EXPLAIN'					=> 'Bouton permettant d’afficher la syntaxe actuelle et corrigée du fichier *.yml.',
	'FILE_NOT_ACCESSIBLE'			=> 'Le fichier <em>%s</em> n’est pas accessible',
	'FILE_NOT_READABLE'				=> 'Le fichier <em>%s</em> est inaccessible en lecture',
	'FILE_OPEN_EXPLAIN'				=> 'Bouton permettant de masquer la syntaxe actuelle et corrigée du fichier *.yml.',
	'FILE_QUERY_EXPLAIN'			=> 'Fichier requérant une attention particulière concernant le nom de l’extension.',

	'ICON_EXTN_DISABLE'				=> 'Désactiver cette extension',
	'ICON_EXTN_ERROR'				=> 'Cette extension contient des erreurs',
	'ICON_EXTN_OK'					=> 'Cette extension apparait comme conforme',
	'ICON_EXTN_QUERY'				=> 'Cette extension présente un problème dans son nom renseigné dans ses fichiers',
	'ICON_FILE_CLOSED'				=> 'Afficher la syntaxe actuelle et corrigée du fichier',
	'ICON_FILE_OPEN'				=> 'Masquer la syntaxe actuelle et corrigée du fichier',
	'ICON_FILE_QUERY'				=> 'Le nom de l’extension doit être vérifié dans ce fichier',
	'INVALID_CHRACTERS'				=> 'Un ou plusieurs caractère(s) « _ » (tiret bas, underscore en anglais) sont présents dans le nom de cette extension <em>%s</em>, ce qui n’est pas conforme.',

	'LEGEND'						=> 'Légende',

	'NEW_FILE'						=> 'Proposition de syntaxe corrigée du fichier',
	'NO_CONFIG_FILES'				=> 'Cette extension n’a aucun fichier de configuration',

	'OK_EXPLAIN'					=> 'Extension apparaissant comme conforme.',
	'ORIGINAL_FILE'					=> 'Syntaxe actuelle du fichier',

	'REQUIRES_ATTENTION'			=> '&nbsp;#Cette ligne nécessite une attention particulière',

	'STATUS'						=> 'Statut du fichier *.yml',

	'VENDOR'						=> 'Auteur de l’extension',
));
