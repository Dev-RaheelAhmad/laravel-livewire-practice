<?php

use function Livewire\Volt\{state};

state('count')->reactive();

?>

<div>
    child count: {{$count}}
</div>
