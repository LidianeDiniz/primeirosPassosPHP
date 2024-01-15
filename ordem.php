<?php
$notas = [
  [
    'aluno' => 'Aluno 1',
    'nota' => 10,
  ],

  [
    'aluno' => 'Aluno 2',
    'nota' => 8,
  ],

  [
    'aluno' => 'Aluno 3',
    'nota' => 5,
  ]
];

function ordernarNotas(array $nota1, array $nota2): int
{
  return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordernarNotas');

var_dump($notas);
