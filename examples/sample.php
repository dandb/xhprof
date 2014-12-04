<?php

function bar($x) {
  if ($x > 0) {
    bar($x - 1);
  }
}

function foo() {
  for ($idx = 0; $idx < 5; $idx++) {
    bar($idx);
    $x = strlen("abc");
  }
}

// start profiling
xhprof_enable();

// run program
foo();

// stop profiler
$xhprof_data = xhprof_disable();

// display raw xhprof data for the profiler run
echo "<pre style='
        height: 200px; 
        overflow-y: scroll; 
        width: 500px; 
        border: 1px solid #000; 
        padding: 1em;'>";
print_r($xhprof_data);
echo "</pre>";



include_once 'xhprof_config.php';
// save raw data for this profiler run using default
// implementation of iXHProfRuns.

$properties = array('DB_TYPE','DB_HOST', 'DB_USER', 'DB_PASS', 'DB_NAME', 'DB_ADAPTER', 'SERVER_NAME', 'NAME_SPACE');

foreach ($properties as $property) {
  if(!defined($property)) {
    echo 'You must define property ' . $property . '. See examples/xhprof_config.php'; exit;
  }
}

require_once XHPROF_LIB_ROOT . 'config.php';
require_once XHPROF_LIB_ROOT . 'utils/xhprof_lib.php';
require_once XHPROF_LIB_ROOT . 'utils/xhprof_runs.php';

$xhprof_runs = new XHProfRuns_Default();

// save the run under a namespace "xhprof_foo"
$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");

require_once XHPROF_ROOT . '/xhprof_html/index.php';