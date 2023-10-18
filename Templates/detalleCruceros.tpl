{if $cruceros != null}
    <li class="list-group-item list-group-item-dark"> cruceros: {$cruceros->nombre}</li>
    <li class="list-group-item list-group-item-dark">ciudades: {$cruceros->ciudad}</li>
    <li class="list-group-item list-group-item-dark">Linea: {$cruceros->cantidad_tripulantes}</li>
    <li class="list-group-item list-group-item-dark">Linea: {$cruceros->estrellas}</li>
{/if}