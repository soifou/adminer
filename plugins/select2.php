<?php

/**
 * Faster tables filter plugin
 * ===========================
 * Useful when there's way too many tables than it shoud be and Adminer Tables Filter is slow
 *
 * @author Martin Macko, https://github.com/linkedlist
 * @license http://http://opensource.org/licenses/MIT, The MIT License (MIT)
 */
class AdminerSelect2
{

    function head() {

    ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
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