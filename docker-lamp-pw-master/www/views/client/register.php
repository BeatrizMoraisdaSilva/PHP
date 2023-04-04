<h1>Cadastro Cliente</h1>
<form action="?controller=client&action=registerView" method="post">
    <div class="mb-3 mt-3">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option 1
        <label class="form-check-label" for="radio1"></label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
        <label class="form-check-label" for="radio2"></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
        <label class="form-check-label">Option 1</label>
    </div>
    <button type="submit">Salvar</button>
</form>