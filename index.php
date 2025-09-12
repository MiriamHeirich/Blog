<?php
$produtos = [
    ['titulo'=> "PRIMEIROS PASSOS COM SPRINT",
    'conteudo'=> "Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
                   programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.",
    'link'=> "primeiros-passos-com-spring.html"        
    ]

    ['titulo'=> " O que é Metodologia Ágil",
     'conteudo'=> "Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
                   programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.",
     'link'=> "primeiros-passos-com-spring.html"        
    ]
    
     ['titulo'=> "PRIMEIROS PASSOS COM SPRINT",
      'conteudo'=> "Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
                   programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.",
      'link'=> "primeiros-passos-com-spring.html"        
    ]

]


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog - Miriam</h1>
        <h2>
            <a href="primeiros-passos-com-spring.html">
            <p>
               <?php
                echo $produtos['titulo']."<br>";
                echo $produtos['conteudo'];
               ?>
            </p>
            </a>
        </h2>
      
        <h2>
            <a href="o-que-e-metodologia-agil.html">
                O que é Metodologia Ágil?
            </a>
        </h2>
        <p>
            Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas.
        </p>
        <h2>
            <a href="como-e-o-funil-do-growth-hacking.html">
                Como é o funil do Growth Hacking?
            </a>
        </h2>
        <p>
            Minha amiga que possui um clube de assinaturas começou a utilizar o Growth Hacking após conhecer um pouco
            mais sobre ele.
        </p>
    </div>
</body>

</html>