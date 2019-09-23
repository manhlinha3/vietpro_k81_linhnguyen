<?php
function showError($errors, $nameInput)
{
    // return 'Xin chao cac ban';
    if ($errors->has('full')){
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>'.$errors->first($nameInput).'</strong>';
        echo '</div>';
    }
}