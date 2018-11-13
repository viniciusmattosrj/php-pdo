<h2>Atualizar User</h2>

<form action="/user_update" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="hidden" name="id" value="<?=$userEncontrado->id;?>">
        <input type="text" class="form-control" name="name" value="<?=$userEncontrado->name;?>" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="<?=$userEncontrado->email;?>" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" value="<?=$userEncontrado->password;?>" placeholder="Input field">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>