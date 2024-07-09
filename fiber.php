
<?php

$fiber = new Fiber(function(): void {
    echo "Fiber started\n";
    $value = Fiber::suspend('Fiber paused');
    echo "Fiber resumed with value: $value\n";
});

echo "Starting fiber\n";
$value = $fiber->start();
echo "Main program: $value\n";
$fiber->resume('Resuming fiber');
echo "Main program ends\n";
?>