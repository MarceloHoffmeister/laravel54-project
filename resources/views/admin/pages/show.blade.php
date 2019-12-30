@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') @endslot

    <h4>{{ $page->title }}</h4>

    <p>
        <small>
            Criado em {{ $page->created_at }} | Atualizado em {{ $page->updated_at->format('d/m/Y H:i:s') }}
        </small>
    </p>

    {!! $page->body !!}

    <a href="{{ route('pages.index') }}" class="btn btn-secondary" role="button">voltar</a>
    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-secondary" role="button">editar</a>
    <form action="{{ route('pages.destroy', $page->id) }}" class="form-horizontal" method="post" style="display:inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="remover" class="btn btn-secondary" role="submit">
    </form>

@endcomponent
