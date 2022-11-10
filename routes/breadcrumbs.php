<?php

//home

use function Symfony\Component\String\b;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Clientes', route('home'));
});

Breadcrumbs::for('clientesCreate', function ($trail) {
    $trail->parent('home');
    $trail->push('Criação de clientes', route('clientes.create'));
});
