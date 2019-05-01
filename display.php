<!-- <?php
$f = "./data.txt"; // გახსნა ფაილის
$file = fopen($f,"r"); //კითხვა იწყება ფაილის დასაწყისიდან

while ( $text =fgets($file)){  // ციკლის მეშვეობით გამოდის ყველა ფაილის ხაზი
   $array[] = $text;            // და ჩაიწერება მასივში
 
}
  foreach($array as $key => $value){ // ფორიჩის მეშვეობით გამოდის ვეძებთ მნიშვნელობებს
    echo($value);                    //და ვბეჭდავთ ექოთი
}
fclose($file);                    // იხურება ფაილი



$numbers = array();  
function rand_num() {
return rand(10,100);
}

for($i=0;$i<100;$i++) {
$number[$i] = rand_num();
// echo $number[$i].'<br>';
}

$f = file_put_contents("./data.txt", $number);


foreach ($number as $key => $value) {
    if($value%2==0)
    echo $value.'<br>';

}




?> -->