<?php
function render_header($header) {
    switch($header) {
        case 'main':
            return 'In Class Assignments';
            break;
        case 'pets':
            return 'Welcome to the Pet Store!';
            break;
        case 'array':
            return 'Random Number Array';
            break;
        case 'loop':
            return "You Can't Get There From Here!";
            break;            
        case 'test':
            return "This is a place to test new ideas.";
            break;
        default:
            break;
    }

}

function render_nav($header) {
    switch($header) {
        case 'main':
            return '<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="pages/while.php">While Loop</a></li>
    <li><a href="pages/pet.php">Pet Store</a></li>
    <li><a href="pages/array.php">Array</a></li>
    <li><a href="pages/test.php">Test</a></li>
</ul>
';
            break;
        case 'pets':
            return '<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="while.php">While Loop</a></li>
    <li><a class="active" href="pet.php">Pet Store</a></li>
    <li><a href="array.php">Array</a></li>
</ul>
';
            break;
        case 'array':
            return '<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="while.php">While Loop</a></li>
    <li><a href="pet.php">Pet Store</a></li>
    <li><a class="active" href="array.php">Array</a></li>

</ul>
';
            break;
        case 'loop':
            return '<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a class="active" href="while.php">While Loop</a></li>
    <li><a href="pet.php">Pet Store</a></li>
    <li><a href="array.php">Array</a></li>
</ul>
';
            break;
        case 'test':
            return '<ul>
    <li><a href="../index.php">Home</a></li>
</ul>
';
            break;
        default:
            break;
    }
}

function render_title($header) {
    return (
        $header == 'main'
        ? '<head>
        <title>In Class Assignments</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" tyle="text/css" href="styles/navi.css" />
    </head>
    '
        : '<head>
        <title>In Class Assignments</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/main.css" />
        <link rel="stylesheet" tyle="text/css" href="../styles/navi.css" />
    </head>
    '
    );
}
