<?php

namespace MINIM1\controller;

function view($path, $data = [])
{
    foreach ($data as $k => $v) {
        $$k = $v;
    }
    require APP . "view/{$path}";
}

function redirect($path) {
    header('location: ' . URL . $path);
}
