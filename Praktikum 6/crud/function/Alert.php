<?php
function alert($msg, $sts) {
    if($sts == 1){
        $type = 'success';
    } else {
        $type = 'danger';
    }
    echo '
    <div class="alert alert-'.$type.'" role="alert">
        '.$msg.'
    </div>
    ';
}
?>
