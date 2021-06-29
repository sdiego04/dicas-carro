<?php
foreach ($lista as $item){
?>
<div class="row g-2">
    <div class="col-sm input-group">
        <span class="input-group-text">Marca</span>
        <input type="text" class="form-control input-group" value="{{$item->marca}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Modelo</span>
        <input type="text" class="form-control" value="{{$item->modelo}}" aria-label="State" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Modelo</span>
        <input type="text" class="form-control" value="{{$item->versao}}" aria-label="State" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Dicas</span>
        <input type="text" class="form-control" value="{{$item->dica}}" aria-label="State" readonly>
    </div>
</div>
<?php
}
?>
