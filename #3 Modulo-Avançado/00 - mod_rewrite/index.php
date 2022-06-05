<?php
    /*  
        * mod_rewiret *
        #> vai servir para deixar a URL 'mais amigavel', ou seja, vai servir para deixar a URL mais legivel e mais fácil de se lembrar.
            #> Exemplo: http://localhost/index.php?id=1&nome=joao
        #> vai ser transformado em: http://localhost/1-joao.php (onde 1 é o id e joao é o nome) 

        #> Sendo assim uma URL mais amigavel e mais fácil de se lembrar.

        #> Obs: O mod_rewiret é um módulo do Apache que faz o rewiring de URL.

        ? Para usar também vai precisar de um arquivo '.htacces' no diretório raiz do site.

        *> Comandos do arquivo '.htacces':
            - RewriteEngine On 
                |> Ativa o mod_rewiret;

            - RewriteCond %{REQUEST_FILENAME} !-f 
                |> Se o arquivo requisitado não for um arquivo normal, então vai negar (não fazer nada);

            - RewriteCond %{REQUEST_FILENAME} !-d 
                |> Se o arquivo requisitado não for um diretório, então vai negar (não fazer nada);
            
            - RewriteRules ^(.*)$ /index.php?$1 [L] 
                |> Se não for um arquivo normal ou diretório, então vai redirecionar para o index.php e passar o parâmetro requisitado, deixando a URL mais amigavel;
                
                #> Obs: Q é uma variável que pode ser qualquer nome, mas é a que vai definir o que vai ser a página inicial do site.

                #> Obs: O '^' indica que o início da URL vai ser a mesma que a URL do site.

                #> Obs: O '$' indica que o fim da URL vai ser a mesma que a URL do site.

                #> Obs: O '^' e '$' são opcionais.
    */

    print_r($_GET);
    
?>