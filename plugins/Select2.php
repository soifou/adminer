<?php

namespace Adminer;

class Select2
{
    function head() {
    ?>
<link<?php echo nonce() ?> href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script<?php echo nonce() ?> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script<?php echo nonce() ?> src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script<?php echo nonce() ?>>
jQuery(document).ready(function($) {
    initSelect2();
    jQuery('legend a').on('click', function(e) {
        initSelect2();
    });
});
function initSelect2() { jQuery('select').select2(); }
</script>
<?php
    }
}
