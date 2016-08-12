<?php
if (
    stripos($_SERVER['HTTP_REFERER'], 'http://jcoded.this/dad-jokes/') !== 0 &&
    stripos($_SERVER['HTTP_REFERER'], 'http://jcoded.xyz/dad-jokes/') !== 0
) {
    exit;
}
$jokes = [
    'Q: How do you make an Octopus laugh?\n\nA: Give it ten-tickles!',
    'If you are ever cold, stand in the corner\n\nThey are 90-degrees',
    'What\'s red and sits in a corner?\n\nA naughty strawberry',
    'What\'s brown and sticky?\n\nA Stick!',
    'Why was 6 afraid of 7\n\nBecause 7-8-9',
    'Why did the mushroom go to the party?\n\nBecause it was a Fun-gi',
    'I gave all my dead batteries away today\n\nFree of charge',
    'Can February march?\n\nNo, but April May',
    'Yesterday, a clown held a door open for me\n\nI thought it was a nice jester',
    'The shovel was a ground breaking invention',
    'I knew I shouldn\'t have eaten that sea-food\n\nNow I feel a little eel',
    'A man tried to sell me a coffin today,\n\nI told him that was the last thing I needed',
    'What\'s the best thing about elevator jokes?\n\nThey work on so many levels',
    '"Sorry, we don\'t serve your kind".\n\nA time traveller walks into a bar',
    'How do you find Will Smith in the snow?\n\nLook for the Fresh Prints',
    'My sea-sickness comes in waves',
    'I have Kleptomania, but don\'t worry\n\nWhen it gets bad, I take something for it',
    'Did you hear about the kid-napping at school?\n\nIt\'s okay, he woke up',
    'I have the heart of a lion\n\nand a life-time ban from the zoo',
    'STEAK PUNS: \n\n They\'re a rare medium, well-done',
    'I have a joke about construction\n\nBut I am still working on it',
    'I was thinking of going on an all-almond diet\n\nBut that is just nuts',
    'I wrote a song about a tortilla\n\nIt is really more of a rap'
];
$joke = $jokes[array_rand($jokes)];
$joke = str_replace('\n', '<br />', $joke);
$response = json_encode(['count' => count($jokes), 'joke' => $joke]);
header('Content-Type:application/json');
header('Content-Length:' . strlen($response));
echo $response;
exit;

