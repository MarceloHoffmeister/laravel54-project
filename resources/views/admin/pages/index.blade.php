@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Administração de páginas @endslot

<a href="{{ route('pages.create') }}" class="btn btn-secondary" role="button">novo</a>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th class="text-right">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td class="text-right">
            <a href="{{ route('pages.show', $page->id) }}" class="btn btn-dark" role="button"><span class="far fa-plus-square"></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $pages->links() }}

@endcomponent
