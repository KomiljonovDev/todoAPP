<?php
function view(string $page, array $data = []): void
{
    extract($data);
    require 'view/' . $page . '.php';
}

function redirect(string $url): void
{
    header('Location: ' . $url);
}