<?php
$idade = 16;
$numeroDePessoas = 2;

Echo "Você só pode entrar se tiver mais do que 18 anos ou apartir de 16 anos acompanhando" . PHP_EOL;

if ($idade >= 18){
    echo "você tem $idade anos. Pode entarar sozinho". PHP_EOL;
    echo "você pode entrar";
}else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você só tem $idade anos. está acompanhado(a), então pode entrar";
}
else{
    echo "Você só tem $idade anos. Você não pode entrar";
}





echo PHP_EOL;
echo "Adeus!";