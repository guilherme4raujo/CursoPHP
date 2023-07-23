<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>CURSOPHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
          <nav class="modulos">

            <div class="modulo verde">

                <h3>Básico</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola.php">
                            Olá PHPvcvcvcxvcvx!
                        </a>
                    </li>
                        
                    <li>
                        <a href="exercicio.php?dir=basico&file=html.php">
                            Integração HTML!
                            fdfsdfsdfdsfsd
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css.php">
                            Integração CSS!
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios.php">
                            Comentários PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio.php">
                            Desafio 
                        </a>
                    </li>
                        
                </ul>
        </div>

        <div class="modulo vermelho">

                <h3>Tipos</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=int.php">
                            Tipo Inteiro!
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=float.php">
                            Tipo Float!
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=aritmeticas.php">
                            Operações Aritméticas!
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_precedencia.php">
                            Desafio !
                        </a>
                    </li>
                            
                </ul> 
        </div>        
                
        <div class="modulo azul">

                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico.php">
                            Variaveis!
                            </a>
                        </li>            
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao.php">
                            Desafio !
                            </a>
                        </li>            
                    
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes.php">
                            Atribuições!
                            </a>
                        </li>            
                    
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao.php">
                            Interpolação!
                            </a>
                        </li>            
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis.php">
                            Variaveis variáveis!
                            </a>
                        </li>            
                    
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis.php">
                            Desafio Variaveis variáveis!
                            </a>
                        </li>            
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia.php">
                            Valor X Referência!
                            </a>
                        </li>            
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_constantes.php">
                            Constantes
                            </a>
                        </li>            
                    
                    </ul>

                 
                    
        </div>
               

          </nav>

            
    </div>

    </main>]
    <footer class="rodape">
        COD3R & Alunos <?= date ('Y') ?>
    </footer>
    
</body>
</html>