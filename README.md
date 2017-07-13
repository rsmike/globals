# Global functions and constants

## Contents

### Constants

#### Time intervals

* MONTHS_IN_YEAR, DAYS_IN_WEEK, DAYS_IN_MONTH, DAYS_IN_YEAR,
* HOURS_IN_DAY, HOURS_IN_WEEK, HOURS_IN_MONTH, HOURS_IN_YEAR,
* MINUTES_IN_HOUR, MINUTES_IN_DAY, MINUTES_IN_WEEK, MINUTES_IN_MONTH, MINUTES_IN_YEAR,
* SECONDS_IN_MINUTE, SECONDS_IN_HOUR, SECONDS_IN_DAY, SECONDS_IN_WEEK, SECONDS_IN_MONTH, SECONDS_IN_YEAR

#### Datetime format

* MYSQL_DATE = 'Y-m-d'
* MYSQL_TIME = 'H:i:s'
* MYSQL_DATETIME = 'Y-m-d H:i:s'

#### Misc
EMPTY_GIF - inline 1x1 transparent gif. To be used as an "img src"

### Functions

* `e($variable...)` - preformatted, dump variables
* `ed($variable...)` - dump variables and die
* `tmpfn($key='temp')` - generate full path to a temporary file in the temporary directory
* `pl($n, $singleform, $pluralform)` - simple pluraliser. Plural form can be omitted for simple cases

### Yii2 specific

* `qq(\yii\db\Query)` - generate SQL from the query object
* `qqd(\yii\db\Query)` - prnt SQL and die

## Installation

Either run

```bash
$ composer require rsmike/globals
```

or add

```
"rsmike/globals": "*"
```

to the `require` section of your `composer.json` file.

