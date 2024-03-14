<?php
//twig_carregar.php

// Carrega o carregador do Composer
require_once('vendor/autoload.php');

// Loader é quem carrega os arquivos HTML (onde fica a pasta de templates)
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto do Twig
$twig = new \Twig\Environment($loader);