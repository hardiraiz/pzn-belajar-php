<?php

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello go to A" . PHP_EOL;

// goto Operator di Loop
$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";