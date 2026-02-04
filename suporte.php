<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'templates\TemplatesPaginas\header.php'; ?>
    <main>
        <div id="contato-geral">
            <section id="formulario">
                <h2>Suporte</h2>
                <form action="">
                    <div id="grid-contato">
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="assunto">Setor:</label>
                            <select id="assunto" name="assunto" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="reclamacao">Administrativo</option>
                                <option value="sugestao">Recursos Humano</option>
                                <option value="franquia">Escritório</option>
                            </select>
                        </div>
                        <div>
                            <label for="assunto">Categoria:</label>
                            <select id="assunto" name="assunto" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="reclamacao">Erro técnico</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="franquia">Login</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="msg">Descrição:</label>
                        <textarea name="msg" id="msg" required placeholder="Digite aqui..."></textarea>
                    </div>
                    <div>
                        <label for="arquivo">Anexar arquivo:</label> <input type="file" id="arquivo" name="arquivo">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </section>
        </div>
    </main>
    <?php include 'templates\TemplatesPaginas\footer.php'; ?>

</body>
</html>