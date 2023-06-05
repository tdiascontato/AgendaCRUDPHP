<?php
    include_once("./templates/header.php")
?>    
    <div class="container">
        <h1 id="main-title">Crudiar contato:</h1>
        <?php ?>
        <?php include_once("templates/backbtn.html"); ?><br>

        <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
                <div class="form-group">
                    <label for="name">Qual é o seu nome?</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome !" required>
                    <label for="phone">Qual é o seu telefone?</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite seu telefone !" required>
                    <label for="observations">Observações?</label>
                    <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Digite sua observação !" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">CADASTRAR</button>
        </form>
    </div>
<?php
    include_once("./templates/footer.php")
?>