<h2>Cadastro Cliente</h2>
<form action="?controller=client&action=registerView" method="post">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="address">Endereço:</label>
        <input type="text" class="form-control" name="address">
    </div>

    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="gender" value="female" checked>Feminino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="male" checked>Masculino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="other" checked>Outro</label>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="accept">Desejo receber os comunicados do site.
            </label>

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>