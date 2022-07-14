<?php require 'config.php'; ?>

<h1>Lista de Úsuarios</h1>

<table border="0" width="96%">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT * FROM usuarios WHERE status = '1'";
        $sql = $pdo->query($sql);

        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $user): 
        ?>
                <tr>
                    <td>
                        <?php echo $user['nome']; ?>
                    </td>
                    <td>
                        <?php echo $user['email']; ?>
                    </td>
                    <th>
                        <a href="excluir.php?id=<?php echo $user['id']; ?>">
                            Excluir
                        </a>
                    </th>
                </tr>
                <?php 
            endforeach; 
        }
        ?>
    </tbody>
</table>