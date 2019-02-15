<?php
echo 'check if true is loosely or strictly equal to "false":';
echo '<br>';
echo (
	true == 'false'
	? (
		true === 'false'
		? 'true is loosely equal to, and is strictly equal to, "false"'
		: 'true is loosely equal to, but is not strictly equal to, "false"'
	)
	: (
		true === 'false'
		? 'true is not loosely equal to, but is strictly equal to, "false"'
		: 'true is not loosely equal to, and is not strictly equal to, "false"'
	)
);

/*
echo '<p>';

echo (
	true == false
	? 'false is loosely equal to true'
	: 'false is not loosely equal to true'
);
echo '<p>';

echo (
	true == 1
	? '1 is loosely equal to true'
	: '1 is not loosely equal to true'
);
echo '<p>';

echo (
	true == 0
	? '0 is loosely equal to true'
	: '0 is not loosely equal to true'
);
echo '<p>';

echo (
	1 == '2'
	? '"2" is loosely equal to 1'
	: '"2" is not loosely equal to 1'
);
echo '<p>';
echo (
	1 == '1'
	? '"1" is loosely equal to 1'
	: '"1" is not loosely equal to 1'
);
//echo '<p>';
