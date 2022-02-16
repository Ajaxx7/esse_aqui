<?php

    require_once('functions/constantes_variaveis.php');
    require_once('functions/laco_for.php');
   


    if(isset($_POST["btnCalcular"]))
    {
        $tabuada = $_POST["txtTabuada"];
        $contador = $_POST["txtContador"];
        
        if($tabuada == "" || $contador == "") //Tratamento de erro de caixa vazia
        {
           echo(ERRO_CAIXA_VAZIA);
        }
        else
        {
            if(is_numeric($tabuada) && is_numeric($contador))
            {
                if($tabuada == 0 || $contador == 0)
                {
                    echo(ERRO_TABUADA_0);
                }
                else
                {
                    for($cont=1;$cont<=$contador;$cont++) 
                    {
                        ($resultado = $tabuada * $cont);
                        $equacoes = $equacoes.$tabuada." x ".$cont." = ".$resultado."<br>"; 
                    }        
                }   
            }
            else
            {
                echo(ERRO_VALORES_NAO_NUMERICOS);
            }  
        }
    }
     

?>


<html>
    <head>
        <title>Atividade 01</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet"
                    href="style.css">
    </head>
    <body>
        <div id="divHeader">
            Matemática
        </div>
        <div id="divMenu">
            <div id="divSubMenu">
                <ul id="ulSubMenu">
                    <li class="liSubMenu">Calculadora</li>
                    <li class="liSubMenu">Tabuada</li>
                    <li class="liSubMenu">Pares e Ímpares</li>
                    <li class="liSubMenu">Média</li>
                </ul>
            </div>
        </div>
        <div id="divEstrutura">
            <div id="divForm">
                <div id="tituloTabuada">
                    TABUADA
                </div>
                <div>
                    <form name="frmTabuada" method="POST" action="">
                        <div class="divLabel">
                         <label class="labels">Tabuada: </label>
                         <input type="text" name="txtTabuada" maxlength="2" class="textoLabel">
                        </div>
                        <div>
                            <input type="submit" value="Calcular" name="btnCalcular" id="botao">
                        </div>                   
                        <div class="divLabel">
                        <label class="labels">Contador: </label>
                        <input type="text" name="txtContador" maxlength="2" class="textoLabel">
                        </div> 
                    </form>
                    <div id="divResultado">
                        <?php
                        echo($equacoes); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div id="voltarTopo">
            <a href="#divHeader">Topo</a>
        </div>
        <p id="textoFooter">Site criado por [Gustavo Enrique "Ajaxx7" Galvão] — Copyright © 2021.</p>
    </footer>
</html>
