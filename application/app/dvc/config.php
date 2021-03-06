<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * This work is licensed under a Creative Commons Attribution 4.0 International Public License.
 *      http://creativecommons.org/licenses/by/4.0/
 *
*/

namespace dvc;

abstract class config extends core\config {
	static $DB_TYPE = 'sqlite';	// needs to be mysql or sqlite to run, disable with 'disabled'

	static $WEBNAME = 'A PSR style PHP Framework';

}
