perf timing
===========

Timing package from perf, the PHP Extensible and Robust Framework.

## Usage

### Clock

```php
<?php

$clock = new \perf\Timing\RealTimeClock();

// Will output something like "2015-01-23"
echo $clock->getDate();

// Will output something like "15:16:17"
echo $clock->getTime();

// Will output something like "2015-01-23 15:16:17"
echo $clock->getDateTime();

// Will output something like "123456789"
echo $clock->getTimestamp();

// Will output something like "123456789.0123 "
echo $clock->getMicrotime();
```

### Timer

```php
<?php

$timer = new \perf\Timing\RealTimeTimer();

$timer->start();

sleep(1);

// Will output something like "1.0023456"
echo $timer->getElapsed();

sleep(1);

// Will output something like "2.0034567"
echo $timer->getElapsed();

$timer->restart();

sleep(1);

// Will output something like "1.0023456"
echo $timer->getElapsed();

sleep(1);

// Will output something like "2.0034567"
echo $timer->getElapsedAndRestart();

sleep(1);

// Will output something like "1.0023456"
echo $timer->getElapsed();
```
