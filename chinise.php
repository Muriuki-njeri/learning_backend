<?php
function chinese_zodiac($year){
       switch (($year-4)%12){
           case 0: return 'Rat';
           case 1: return 'Ox';
           case 2: return 'Tiger';
           case 3: return 'Rabbit';
           case 4: return 'Dragon';
           case 5: return 'Snake';
           case 6: return 'Horse';
           case 7: return 'Goat';
           case 8: return 'Monkey';
           case 9: return 'Rooster';
           case 10: return 'Dog';
           case 10: return 'Pig';
}
}
echo "2015 is the year of " . chinese_zodiac (2015);
