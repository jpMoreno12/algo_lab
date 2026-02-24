<?php

$api = [
    ['id' => '1', 'name' => 'pikachu'],
    ['id' => '2', 'name' => 'bulbassaur'],
    ['id' => '3', 'name' => 'charmander']
];

$caseTests = [
    ['id' => '1', 'name' => 'squirtle', 'case' => false],
    ['id' => '2', 'name' => 'bulbassaur', 'case' => true],
    ['id' => '3', 'name' => 'charmeleon', 'case' => false],
];

$route = '/api/pokemons/';

foreach ($caseTests as $test) {

    $makeRequest = $route . $test['id'];

    // simula buscar o pokemon na API pelo ID
    $pokemonFromApi = null;

    foreach ($api as $pokemon) {
        if ($pokemon['id'] === $test['id']) {
            $pokemonFromApi = $pokemon;
            break;
        }
    }

    if (!$pokemonFromApi) {
        echo "❌ Pokemon não encontrado na API: {$makeRequest}\n\n";
        continue;
    }

    $passed = $pokemonFromApi['name'] === $test['name'];

    if ($passed === $test['case']) {
        echo "✅ Teste passou para rota {$makeRequest}\n";
    } else {
        echo "❌ Teste falhou para rota {$makeRequest}\n";
    }

    echo "Esperado: {$test['name']}\n";
    echo "Recebido: {$pokemonFromApi['name']}\n\n";
}
