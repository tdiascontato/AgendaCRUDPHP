<?php
    include_once("./templates/header.php")
?>    
    <div class="container">
        <h1 id="main-title">Editar <?=$contact['name']?>?</h1>
        <?php ?>
        <?php include_once("templates/backbtn.html"); ?><br>

        <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?=$contact['id']?>">
                <div class="form-group">
                    <label for="name">Qual é o novo nome?</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Update em <?=$contact['name']?>?" required>
                    <label for="phone">Qual é o novo telefone?</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Novo telefone !" required>
                    <label for="observations">Novas observações?</label>
                    <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Digite novas observações !" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">RECADASTRAR</button>
        </form>
    </div>
<?php
    include_once("./templates/footer.php")
?>