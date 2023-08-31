<div>
    <h1>{{$title}}</h1>
    {{$username}}
    {{count($users)}}
    <button wire:click="createNewUser">Criar Usuário</button>
</div>
