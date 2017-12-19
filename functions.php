<?php

const MYSQL_DATE = 'Y-m-d';
const MYSQL_TIME = 'H:i:s';
const MYSQL_DATETIME = MYSQL_DATE.' '.MYSQL_TIME;

define('MONTHS_IN_YEAR', 12);

define('DAYS_IN_WEEK', 7);
define('DAYS_IN_MONTH', 30);
define('DAYS_IN_YEAR', 365);

define('HOURS_IN_DAY', 24);
define('HOURS_IN_WEEK', HOURS_IN_DAY * DAYS_IN_WEEK);
define('HOURS_IN_MONTH', HOURS_IN_DAY * DAYS_IN_MONTH);
define('HOURS_IN_YEAR', HOURS_IN_DAY * DAYS_IN_YEAR);

define('MINUTES_IN_HOUR', 60);
define('MINUTES_IN_DAY', MINUTES_IN_HOUR * HOURS_IN_DAY);
define('MINUTES_IN_WEEK', MINUTES_IN_DAY * DAYS_IN_WEEK);
define('MINUTES_IN_MONTH', MINUTES_IN_DAY * DAYS_IN_MONTH);
define('MINUTES_IN_YEAR', MINUTES_IN_DAY * DAYS_IN_YEAR);

define('SECONDS_IN_MINUTE', 60);
define('SECONDS_IN_HOUR', SECONDS_IN_MINUTE * MINUTES_IN_HOUR);
define('SECONDS_IN_DAY', SECONDS_IN_HOUR * HOURS_IN_DAY);
define('SECONDS_IN_WEEK', SECONDS_IN_DAY * DAYS_IN_WEEK);
define('SECONDS_IN_MONTH', SECONDS_IN_DAY * DAYS_IN_MONTH);
define('SECONDS_IN_YEAR', SECONDS_IN_DAY * DAYS_IN_YEAR);

define('EMPTY_GIF','data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');

// Debug functions

if (! function_exists('e')) {
	function e(){array_map(function ($v) {echo '<pre>';var_dump($v);echo'</pre>';}, func_get_args());}
	if (! function_exists('ed')) {
		function ed(){call_user_func_array('e',func_get_args());die; }
	}
}

if (!function_exists('tmpfn')) {
	function tmpfn($n='temp') { return tempnam(sys_get_temp_dir(), $n); }
}

if (!function_exists('pl')) {
    function pl($n, $singular, $plural=null, $none=null) {
		if (!is_null($none) && empty($n)) return $none;
        if($n==1) return str_replace('#', $n, $singular);
        if(!is_null($plural)) return str_replace('#', $n, $plural);
        // check last letter
        switch(strtolower($singular[strlen($singular)-1])) {
            case 'y':
            	return str_replace('#', $n, substr($singular,0,-1).'ies');
            case 's':
	            return str_replace('#', $n, $singular.'es');
            default:
    	        return str_replace('#', $n, $singular.'s');
        }

    }
}

if (!function_exists('lines')) {
	function lines($n) { return preg_split("/\R/",$n,null,PREG_SPLIT_NO_EMPTY)?:[]; }
}


// Yii2 specific

if (!function_exists('qq')) {
	function qq($q){
		if (class_exists('\yii\db\Query')) {
			return $q->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql;
		} else {
			return 'No \yii\db\Query class detected';
		}
	}

	if (!function_exists('qqd')) {
		function qqd($q){ ed(qq($q)); }
	}
}