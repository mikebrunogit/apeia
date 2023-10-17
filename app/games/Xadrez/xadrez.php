<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xadrez</title>
</head>
<body onload="inicia_jogo();">
<div id="fundo"></div>
<div id="escolhecor-inicio" class="escolhe" >
	<div onclick="escolhecor_incio('branco');">&#9812;</div>
   	<div onclick="escolhecor_incio('preto');">&#9818;</div>
</div>
<div id="escolhebranco" class="escolhe">
	<div onclick="escolhe('rainha','branco');">&#9813;</div>
    <div onclick="escolhe('torre','branco');">&#9814;</div>
    <div onclick="escolhe('cavalo','branco');">&#9816;</div>
    <div onclick="escolhe('bispo','branco');">&#9815;</div>
</div>
<div id="escolhepreto" class="escolhe">
	<div onclick="escolhe('rainha','preto');">&#9819;</div>
    <div onclick="escolhe('torre','preto');">&#9820;</div>
    <div onclick="escolhe('cavalo','preto');">&#9822;</div>
    <div onclick="escolhe('bispo','preto');">&#9821;</div>
</div>

<div id="tabuleiro">
<div id="t11" onclick="seleciona(1,1);"></div>	<div id="t12" onclick="seleciona(1,2);"></div>
<div id="t13" onclick="seleciona(1,3);"></div>	<div id="t14" onclick="seleciona(1,4);"></div>
<div id="t15" onclick="seleciona(1,5);"></div>	<div id="t16" onclick="seleciona(1,6);"></div>
<div id="t17" onclick="seleciona(1,7);"></div>	<div id="t18" onclick="seleciona(1,8);"></div>

<div id="t21" onclick="seleciona(2,1);"></div>	<div id="t22" onclick="seleciona(2,2);"></div>
<div id="t23" onclick="seleciona(2,3);"></div>	<div id="t24" onclick="seleciona(2,4);"></div>
<div id="t25" onclick="seleciona(2,5);"></div>	<div id="t26" onclick="seleciona(2,6);"></div>
<div id="t27" onclick="seleciona(2,7);"></div>	<div id="t28" onclick="seleciona(2,8);"></div>

<div id="t31" onclick="seleciona(3,1);"></div>	<div id="t32" onclick="seleciona(3,2);"></div>
<div id="t33" onclick="seleciona(3,3);"></div>	<div id="t34" onclick="seleciona(3,4);"></div>
<div id="t35" onclick="seleciona(3,5);"></div>	<div id="t36" onclick="seleciona(3,6);"></div>
<div id="t37" onclick="seleciona(3,7);"></div>	<div id="t38" onclick="seleciona(3,8);"></div>

<div id="t41" onclick="seleciona(4,1);"></div>	<div id="t42" onclick="seleciona(4,2);"></div>
<div id="t43" onclick="seleciona(4,3);"></div>	<div id="t44" onclick="seleciona(4,4);"></div>
<div id="t45" onclick="seleciona(4,5);"></div>	<div id="t46" onclick="seleciona(4,6);"></div>
<div id="t47" onclick="seleciona(4,7);"></div>	<div id="t48" onclick="seleciona(4,8);"></div>

<div id="t51" onclick="seleciona(5,1);"></div>	<div id="t52" onclick="seleciona(5,2);"></div>
<div id="t53" onclick="seleciona(5,3);"></div>	<div id="t54" onclick="seleciona(5,4);"></div>
<div id="t55" onclick="seleciona(5,5);"></div>	<div id="t56" onclick="seleciona(5,6);"></div>
<div id="t57" onclick="seleciona(5,7);"></div>	<div id="t58" onclick="seleciona(5,8);"></div>

<div id="t61" onclick="seleciona(6,1);"></div>	<div id="t62" onclick="seleciona(6,2);"></div>
<div id="t63" onclick="seleciona(6,3);"></div>	<div id="t64" onclick="seleciona(6,4);"></div>
<div id="t65" onclick="seleciona(6,5);"></div>	<div id="t66" onclick="seleciona(6,6);"></div>
<div id="t67" onclick="seleciona(6,7);"></div>	<div id="t68" onclick="seleciona(6,8);"></div>

<div id="t71" onclick="seleciona(7,1);"></div>	<div id="t72" onclick="seleciona(7,2);"></div>
<div id="t73" onclick="seleciona(7,3);"></div>	<div id="t74" onclick="seleciona(7,4);"></div>
<div id="t75" onclick="seleciona(7,5);"></div>	<div id="t76" onclick="seleciona(7,6);"></div>
<div id="t77" onclick="seleciona(7,7);"></div>	<div id="t78" onclick="seleciona(7,8);"></div>

<div id="t81" onclick="seleciona(8,1);"></div>	<div id="t82" onclick="seleciona(8,2);"></div>
<div id="t83" onclick="seleciona(8,3);"></div>	<div id="t84" onclick="seleciona(8,4);"></div>
<div id="t85" onclick="seleciona(8,5);"></div>	<div id="t86" onclick="seleciona(8,6);"></div>
<div id="t87" onclick="seleciona(8,7);"></div>	<div id="t88" onclick="seleciona(8,8);"></div>

</div>
</body>
</html>