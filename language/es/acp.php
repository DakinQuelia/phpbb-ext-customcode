<?php

/**
* phpBB Extension - marttiphpbb customcode
* @copyright (c) 2014 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ » “ ” …

$lang = array_merge($lang, array(

	'ACP_CUSTOMCODE_INCLUDE_EXAMPLE'			=> 'Para incluir sus propios archivos, anteponga el nombre del archivo con <code>../../../../../../%1$s/</code><p><code>&lt;!-- INCLUDE ../../../../../../%1$s/mi_archivo.html --></code></p>',
	'ACP_CUSTOMCODE_CREATE_FILE'				=> 'Crear archivo',
	'ACP_CUSTOMCODE_DELETE'						=> 'Borrar',
	'ACP_CUSTOMCODE_DELETE_FILE_NAME'			=> 'Borrar %s',
	'ACP_CUSTOMCODE_FILES_EXPLAIN'				=> 'Los archivos incluidos directamente con eventos plantilla %1$s no se pueden eliminar. Todos los archivos residen en el directorio %2$s.',
	'ACP_CUSTOMCODE_FILE_SIZE'					=> 'Tamaño',
	'ACP_CUSTOMCODE_FILE_NAME'					=> 'Nombre',
	'ACP_CUSTOMCODE_FILE_COMMENT'				=> 'Comentario',
	'ACP_CUSTOMCODE_FILE'						=> 'Archivo',
	'ACP_CUSTOMCODE_EDITOR_ROWS'				=> 'Filas del editor',
	'ACP_CUSTOMCODE_SAVE_CONFIRM'				=> '¿ Quiere guardar el archivo %s ?',
	'ACP_CUSTOMCODE_SAVE'						=> 'Guardar',
	'ACP_CUSTOMCODE_SAVE_PURGE_CACHE'			=> 'Guardar y limpiar el caché',
	'ACP_CUSTOMCODE_SAVE_PURGE_CACHE_CONFIRM'	=> '¿Quiere guardar el archivo %s y purgar el caché?',
	'ACP_CUSTOMCODE_FILE_SAVED'					=> '¡El archivo %s ha sido guardado correctamente!',
	'ACP_CUSTOMCODE_FILE_SAVED_CACHE_PURGED'	=> '¡El archivo %s ha sido guardado, y el caché purgado correctamente!',
	'ACP_CUSTOMCODE_NOT_WRITABLE'				=> 'El archivo %s no se puede escribir.',
	'ACP_CUSTOMCODE_FILE_CREATED'				=> 'El archivo %s ha sido creado.',
	'ACP_CUSTOMCODE_FILENAME_EMPTY'				=> 'El nombre del archivo estaba vacío.',
	'ACP_CUSTOMCODE_FILE_NOT_CREATED'			=> 'El archivo %s no pudo ser creado.',
	'ACP_CUSTOMCODE_FILE_ALREADY_EXISTS'		=> 'El archivo %s ya existe.',
	'ACP_CUSTOMCODE_DELETE_FILE_CONFIRM'		=> '¿ Borrar el archivo %s ?',
	'ACP_CUSTOMCODE_FILE_DELETED'				=> 'El archivo %s ha sido borrado.',
	'ACP_CUSTOMCODE_FILE_DOES_NOT_EXIST'		=> 'El archivo %s no existe.',
	'ACP_CUSTOMCODE_FILE_NOT_DELETED'			=> 'Error al eliminar el archivo %s.',
	'ACP_CUSTOMCODE_EVENT_FILE_INDICATOR'		=> '(E)',
	'ACP_CUSTOMCODE_SHOW_TEMPLATE_EVENTS_LOCATIONS'	=> 'Mostrar código personalizado de las ubicaciones de eventos de plantilla',
	'ACP_CUSTOMCODE_HIDE_TEMPLATE_EVENTS_LOCATIONS'	=> 'Ocultar código personalizado de las ubicaciones de eventos de plantilla',

));
