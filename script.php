<head>
<STYLE>
    img {
        width: 128px;
    }
</STYLE>


</head>
<body>
    <div>
<?php
$favcolor = $_POST["favcolor"];
switch ($favcolor){
case "vermelho":
    echo "<p> ☆ sua cor favorita é vermelho! ☆ </p>";
    echo "<img src='morango.avif'/>";
break;
case "azul";
echo "<p> ☆ sua cor favorita é azul! ☆ </p>";
echo "<img src='azul.jpg'/>";
break;
case "verde";
echo "<p> ☆ sua cor favorita é verde! ☆ </p>";
echo "<img src='verde.png'/>";
break;
default:
echo "<p> sua cor favorita nâo é vermelho,azul ou verde! </p>";
 
 
}
?>
    </div>
</body>
 