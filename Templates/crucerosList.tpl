<!-- lista de Cruceros -->
{if isset($smarty.session.IS_LOGGED)}    
    {if $title == "Cruceros"}
        <a href='AgregarCrucero' type='button' class='btn btn-danger'>Agregar</a>
    {/if}
{/if}
<ul class="list-group">
    {foreach from=$cruceros item=$crucero}
        <li class="d-flex justify-content-between align-items-center">
            <a class="nav-link list-group-item list-group-item-action" href="Cruceros/{$crucero->id_cruceros}"> <b>{$crucero->nombre}</b> </a>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} Cruceros</small></p>