{if isset($smarty.session.IS_LOGGED)}    
    {if $title == "Ciudades"}
        <a href='AgregarCiudades' type='button' class='btn btn-danger'>Agregar</a>
    {/if}
{/if}
<ul class="list-group">
    {foreach from=$ciudades item=$ciudad}
        <li class="d-flex justify-content-between align-items-center">
            <a class="nav-link list-group-item list-group-item-action" href="Ciudades/{$ciudad->id_ciudad}"> <b>{$ciudad->ciudad}</b> </a>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} Ciudad</small></p>