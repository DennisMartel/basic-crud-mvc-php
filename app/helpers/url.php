<?php

function redirect($url){
    header('Location:' . BASE_URL . $url);
}