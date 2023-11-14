<h1>Cadastrar Novo Site</h1>

<x-alerts/>

<form action="{{route('sites.update', $site->id) }}" method="POST">
    @method('PUT')
    @include('admin.sites.partials.form')
</form>

<form action="{{ route('sites.destroy', $site->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button>Deletar site</button>
</form>