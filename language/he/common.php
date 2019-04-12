<?php
/**
 *
 * Best Answer extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kinerity, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERS'	=> 'תשובות',

	'ENABLE_ANSWER'			=> 'אפשר התשובה הטובה ביותר',
	'ENABLE_ANSWER_EXPLAIN'	=> 'אם סימנת כן,  בעל האשכול (אם מורשה) ומנהלים (כאשר מורשה) יוכלו לסמן הודעת תגובה כתשובה הטובה ביותר.',

	'TO_POST'	=> 'עבור להודעה המלאה',

	'LOG_MARK_ANSWER'	=> '<strong>סימן הודעה כתשובה הטובה ביותר</strong><br />» %1$s על ידי %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>ביטל סימן הודעה כתשובה הטובה ביותר</strong><br />» %1$s על ידי %2$s',

	'MARK_ANSWER'			=> 'סמן את התשובה',
	'MARK_ANSWER_CONFIRM'	=> 'האם אתה בטוח שברצונך לסמן הודעה זו כתשובה הטובה ביותר?',

	'TOTAL_ANSWERS'	=> 'סה"כ תשובות',

	'UNMARK_ANSWER'			=> 'בטל את סימון התשובה',
	'UNMARK_ANSWER_CONFIRM'	=> 'האם אתה בטוח שברצונך לבטל את סימון הודעה זו כתשובה הטובה ביותר?',
	
	'BUTTON_MARK'	=> 'תשובה הטובה ביותר',
	'BUTTON_UNMARK'	=> 'בטל תשובה',
));
