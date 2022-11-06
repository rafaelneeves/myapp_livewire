<div>
    <input type="text" wire:model="item">
    @if($acao == 'cadastrar')
        <button wire:click="add">Adicionar</button>
    @else
        <button wire:click="update">Atualizar</button>
    @endif
    <button wire:click="resetLista">Resetar</button>

    <ul>
        @foreach($lista as $key => $lista_nome)
            <li>
                <span>{{$lista_nome}} - {{$key}}</span>
                <button wire:click="edit({{$key}})">Editar</button>
                <button wire:click="delete({{$key}})">X</button>
            </li>
        @endforeach
    </ul>
</div>
