<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                display: flex;
                align-items: flex-start;
                justify-content: center;
                min-height: 100vh;
                font-family: Consolas;
                margin: 0; padding: 0;
                padding-top: 3rem;
                overflow: hidden;
            }

            div {
                width: 300px;
                background-color: #EF3D3D;
                color: #fff;
                border-radius: 12px;
                padding: 24px;
            }

            h1 {
                margin-bottom: 2rem;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>
                Este é um cabeçalho <?php echo rand(0, 999999); ?>
            </h1>

            <form method="POST">
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    placeholder="E-mail"
                />

                <br><br>

                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="Senha"
                />

                <br><br>

                <input 
                    type="submit" 
                    value="Enviar"
                />
            </form>
        </div>

    </body>
</html>