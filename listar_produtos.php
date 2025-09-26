<?php
    include 'pedaco.php'
?>
     <!-- tabela -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PRECO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>

<!-- listar.php-->
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                        echo "<td>" . $produto['id'] . "</td>";
                        echo "<td>" . $produto['nome'] . "</td>";
                        echo "<td>" . $produto['preco'] . "</td>";   
                        echo "<td>" . $produto['quantidade'] . "</td>";   
                        echo "
                        <td>
                            <div >
                                <a href='form_atualiza.php?id=" . $produto['id'] . "' type='button' class='btn btn-custom-color btn_lista '>ATUALIZAR</a>
                                <a href='excluir.php?id=" . $produto['id'] . " ' type='button' class='btn btn-custom-color btn_lista'>APAGAR</a>
                            </div>
                        </td>
                        ";  
                    echo "</tr>";

                }
            ?>
   
               
            </tbody>
        </table>
        <a href="index.php" type="button" class="btn btn-custom-color">Voltar</a>
    </div>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>