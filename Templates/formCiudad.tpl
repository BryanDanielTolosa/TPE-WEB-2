<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="{$action}{$nav_id}/SEND">
        <div class="form-group">
            <label for="Name">Nombre Ciudad</label>
<input type="String" required class="form-control" {if $action == "Editciudad"}value="{$Ciudades->ciudad}"{/if} name="ciudad">
        </div>
        <div class="form-group">
            <label for="Name">Nombre Pais</label>
<input type="String" required class="form-control" {if $action == "Editciudad"}value="{$Ciudades->pais}"{/if} name="pais">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Hecho</button>
    </form>
</div>