<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input required class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>