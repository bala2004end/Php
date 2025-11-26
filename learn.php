<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
print("I am a Balakrishnan:"."\n"."<br>");
$varchar=8;
$vae="jjjj";
printf("%s Bala",$vae."\n"."<br>" );
printf($varchar."\n"."<br>");
$f1=2.2e5;
printf("%f",$f1);
unset($f1);
printf($f1);
?>


<h1> Array 
</h1>
<?php
$ar=[5,6,3,2,"ki",2.021];
for($i=0;$i<count($ar);$i++){
    printf($ar[$i]."<br>"."\n");

}
$arr=["one"=>67,
"two"=>"hi"];
print_r($arr);
print($arr[0]);
print("\n"."<br>");
print_r($ar);
print_r(array_flip($arr));
$arrt=array_flip($arr);
//printf($ar[0]."<br>"."\n");
function bala($value,$key){
    print("$key:$value<br>\n");
}
array_walk($arrt,"bala");
print_r(array_chunk($arr,2,true));  