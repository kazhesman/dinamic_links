<?php
for ($i=1; $i < 11; $i++) {
${"x".$i} = $i;
echo ${"x".$i};
}