<?php

class AdminerSelect2
{
    function head() {
    ?>
<link<?php echo nonce() ?> href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script<?php echo nonce() ?> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script<?php echo nonce() ?> src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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