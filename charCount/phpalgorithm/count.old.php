<?php
/*Program to take text file as input and count the number of times each character of the specified
 *language in the file occurs
 *author: jojoo
 *date started: 20090113
 *last updated: 20090213
 */

/*Declaration of characters to look for*/
static $char_a = "a";
static $char_b = "b";
static $char_c = "c";
static $char_d = "d";
static $char_e = "e";
static $char_f = "f";
static $char_g = "g";
static $char_h = "h";
static $char_i = "i";
static $char_j = "j";
static $char_k = "k";
static $char_l = "l";
static $char_m = "m";
static $char_n = "n";
static $char_o = "o";
static $char_p = "p";
static $char_q = "q";
static $char_r = "r";
static $char_s = "s";
static $char_t = "t";
static $char_u = "u";
static $char_v = "v";
static $char_w = "w";
static $char_x = "x";
static $char_y = "y";
static $char_z = "z";


/*An array of all the characters to allow for easier manipulation*/
$array_chars = array(
$char_a,
$char_b,
$char_c,
$char_d,
$char_e,
$char_f,
$char_g,
$char_h,
$char_i,
$char_j,
$char_k,
$char_l,
$char_m,
$char_n,
$char_o,
$char_p,
$char_q,
$char_r,
$char_s,
$char_t,
$char_u,
$char_v,
$char_w,
$char_x,
$char_y,
$char_z,
);

/*read contents of sampletext into $sometext. strlen simply states how many characters are in a string*/ 
$sometext = file_get_contents($filename = "sampletext");
 print_r($sometext."<br>".'the number of characters including spaces in "'.$filename.'" is '.strlen($sometext)."<br>");

/*ereg_replace() searches for spaces, periods, etc and removes them*/
$formatted_string = eregi_replace("[^a-z]", "", $sometext);
print_r( $formatted_string."<br>");
/*loop should go through the whole $sometext and at each character, count that character and increment object that represents that character*/
$array_formatted_string = str_split($formatted_string); //making an array that consists of each character in $formatted_string

for ($j=0; $j<count($array_chars); $j++){
 for ($i=0; $i<count($array_formatted_string); $i++){ //loop checks each character of $formatted string and sees if it's the same as "a" and then increments a. you should write a function to enable checking if the character is a ...
    if ($array_formatted_string[$i] == $array_chars[$j]){
      $count = $count + 1;
    }
  }
print_r ($array_chars[$j]." occurs ".$count." times in text"."<br>");
$count = 0;//reset counter before another check is done on the next character
}

//print_r("What language do you want to analyze?"."<br>"); //aim is to create a form that will accept the iso code of the language, say en
//static $lang_check = "en";

/* todo: write a function that counts the number of characters in the text
 * counts the number of times each character occurs, and then outputs these numbers nicely in a table
**/

/*show table and headings*/
print_r ( '<table border="1" cellpadding="5"> 
	<tr> <th> Character </th> <th> Frequency </th> </tr>
      </table>');
?>
