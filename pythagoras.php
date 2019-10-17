<?php
$a = '5';
$b = '4';
$obdelnikobsah = ($a * $b);
?>

Obsah obdelníku o stranách : <?php echo
$a ; ?> cm a  <?php echo
$b ; ?> cm je <?php echo
$obdelnikobsah ; ?> cm2


<?php
$strana = 6;
$uhel = 60;
$vyska = 5.1961524227066; // past vedle pasti
$trojuhelnikobsah = ($strana * $vyska) / 2;
?>

<?php
 deg2rad ($uhel); // taky katastrofa
?>
</br>
</br>
Rovnostranny trojuhelnik o strane delky <?php
echo $strana;?> cm a uhlu <?php echo $uhel; ?> stupnu je <?php echo round(15.58845726812 ) // 16 $trojuhelnikobsah;
?> cm2
</br>


// tak takhle to melo byt
<?php
$strana = 6;
$uhel = 60;
$obsahTrojuhelnika = round($strana * $strana * sin(deg2rad($uhel)) / 2);
?>







