<?php

if (isset($errors) && count($errors) == 0) {
    foreach ($errors as $error => $value) {
        var_dump($error);
    }
}
