<?php
function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
echo "dicetak/return:";
print_r(count_Vowels('programmer'));
echo PHP_EOL;
echo "dicetak/return:";
print_r(count_Vowels('hmm...'));

?>