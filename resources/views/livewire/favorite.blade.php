<form wire:submit="favoritise">
    @if ($layout == 'button')
    <button class="btn btn-block btn-thm"><span class="flaticon-favorites"></span>
        Ajouter au
        Favoris</button>
    @else
    <button class="favorit"><span class="flaticon-favorites"></span></button>
    @endif
</form>