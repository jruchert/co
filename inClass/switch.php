<?php
$options = array('--Select Pet--', "I'm feeling adventerous!", "I don't like fur!", "I want something more normal." "I don't want a pet...");
$prompts = [
    'Welcome to the mystery pet store.'
    'Select an option from our menu to get a mystery pet.',
    'If you do not like our options, you can always leave.',
    'Have a good day!',
    'I hope you like your $animal!',
    'This is not an option. Select another one.'
];
$normal_animals = [
    'Cat',
    'Snake',
    'Dog',
    'Rabbit',
    'Rat',
    'Iguanadon',
    'Clownfish'
    'Gerbil',
    'Parrot'
];
$adventerous_animals = [
    'Komodo Dragon',
    'Manatee',
    'Shark',
    'Orangutan',
    'Mockingbird',
    'Velociraptor'
];
$furless_animals = [
    'Naked Mole-Rat',
    'Siamese Cat',
    'Parrot',
    'Iguanadon',
    'Snake',
    'Clown-fish'
];
$not_a_pet = [
    'Tamagochi',
    'Pokemon',
    'Digimon',
    'Baby'
];

$selection = $_POST['selection'];
$type = $selection[$_POST['type']];
