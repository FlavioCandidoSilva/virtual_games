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


Breadcrumbs::for('clientesUpdate', function ($trail) {
    $trail->parent('home');
    $trail->push('Atualizar cliente', route('clientes.edit'));
});


Breadcrumbs::for('status.show', function ($trail) {
    $trail->parent('home');
    $trail->push('Listagem de status', route('status.show'));
});
