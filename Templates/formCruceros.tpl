<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="{$action}{$nav_id}/SEND">
        <div class="form-group">
            <label for="nombre">Nombre Del Crucero</label>
            <input type="String" required class="form-control" {if $action == "EditCrucero"}value={$Crucero->nombre} {/if} name="nombre">
        </div>
        <div class="form-group">
            <label for="id_ciudad">Ciudad</label>
            <select name="id_ciudad" class="form-select">
                    {foreach from=$ciudad item=$Ciudades}
                    <option value="{$Ciudades->id_ciudad}" >{$Ciudades->ciudad}</option>
                    {/foreach}
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_tripulantes">Cantidad Tripulantes</label>
            <input type="number" required class="form-control" {if $action == "EditCrucero"}value={$Crucero->cantidad_tripulantes} {/if} name="cantidad_tripulantes">
        </div>
        <div class="form-group">
            <label for="estrellas">estrellas</label>
            <input type="number" required class="form-control" {if $action == "EditCrucero"}value={$Crucero->estrellas} {/if} name="estrellas">
        </div>        
        <button type="submit" class="btn btn-primary mt-3">Hecho</button>
    </form>
</div>