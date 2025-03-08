<?php

namespace Adminer;

/**
 * Minimalistic but perfect custom scrollbar plugin
 *
 * @see https://perfectscrollbar.com/
 */
class PerfectScrollbar
{
    function head() {
    ?>
<link<?php echo nonce() ?> href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
<script<?php echo nonce() ?> src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
<script<?php echo nonce() ?>>
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('tables')) {
        const ps = new PerfectScrollbar('#tables');
    }
}, false);
</script>
<?php
    }
}
