<?php

class AdminerPerfectScrollbar
{
    function head() {
    ?>
<link<?php echo nonce() ?> href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
<script<?php echo nonce() ?> src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
<script<?php echo nonce() ?>>
document.addEventListener('DOMContentLoaded', function(){
    const ps = new PerfectScrollbar('#tables');
}, false);
</script>
<?php
    }
}