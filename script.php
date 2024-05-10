<body>
    <div>
<?php
$favcolor = $_POST["favcolor"];
switch ($favcolor){
case "vermelho":
    echo "<p> sua cor favorita é vermelho! </p>";
break;
case "azul";
echo "<p> sua cor favorita é azul! </p>";
break;
case "verde";
echo "<p> sua cor favorita é verde! </p>";
break;
default:
echo "<p> sua cor favorita nâo é vermelho,azul ou verde! </p>";
 
 
}
?>
    </div>
</body>
 