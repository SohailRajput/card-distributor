<?php
header('Content-Type: application/json; charset=UTF-8');
function createDeck(){
    $deck = [];
    foreach(['S','H','D','C'] as $suit) {
        foreach(['A','2','3','4','5','6','7','8','9','10','J','Q','K'] as $rank) {
            array_push($deck, $suit . '-'. $rank);
        }
    }
    shuffle($deck);
    return $deck;
}
function destribute($players, $deck){
    $deckSize = count($deck);
    if ($players <= 0) {
        throw new Exception('Irregularity Occured. Number of players must be greater than 0');
    }

    $distribution = [];
    for ($i = 0; $i < $deckSize; $i++) {
        // using modulo to distribute the cards
        $hand = $i % $players;
        if (!isset($distribution[$hand])) {
            $distribution[$hand] = [];
        }
        array_push($distribution[$hand], $deck[$i]);
    }
    return $distribution;
}

$input = file_get_contents("php://input");
$data = json_decode($input, true);

$nPlayers = $data['players'];
$nPlayers = intval($nPlayers);

if (empty($nPlayers)) {
    http_response_code(400);
    echo json_encode(['message' => 'Number of players must be provided']);
    exit;
}

$deck = createDeck();
$distribution = destribute($nPlayers, $deck);
echo json_encode($distribution);
exit;