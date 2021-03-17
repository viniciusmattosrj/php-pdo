<h2>Cadastrar User</h2>

<form action="/user_store" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>