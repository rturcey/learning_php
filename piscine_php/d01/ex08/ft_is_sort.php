<?php
    function    ft_is_sort($tab){
        $sorted = $tab;
        sort($sorted);
        if (array_diff_assoc($tab, $sorted))
            return false;
        return true;
    }
?>