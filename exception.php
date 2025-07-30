<?php
    function divided($a, $b){
        if ($b === 0) {
            throw new Exception("Error : The number is zero");
        }
        return $a / $b;
    }

    try {
        echo divided(12, 0);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br>finish";
    }
?>