<?php
define('N', 1005);

$adj = array_fill(0, N, array_fill(0, N, 0));
$visited = array_fill(0, N, false);

function bfs($s, $n)
{
    global $adj, $visited;
    $queue = [];
    $front = 0;
    $rear = -1;
    $queue[++$rear] = $s;
    $visited[$s] = true;

    while ($front <= $rear) {
        $u = $queue[$front++];
        echo "$u ";
        for ($v = 1; $v <= $n; $v++) {
            if ($adj[$u][$v] && !$visited[$v]) {
                $queue[++$rear] = $v;
                $visited[$v] = true;
            }
        }
    }
}

// Static input for the graph
$n = 5; // Number of nodes
$m = 6; // Number of edges

$edges = [
    [1, 2],
    [1, 3],
    [2, 4],
    [2, 5],
    [3, 5],
    [4, 5],
];

foreach ($edges as $edge) {
    list($u, $v) = $edge;
    $adj[$u][$v] = 1;
    $adj[$v][$u] = 1; // For undirected graph
}

bfs(1, $n);