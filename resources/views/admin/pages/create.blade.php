@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Inclusão de página @endslot

    <form action="{{ route('pages.store') }}" class="form-horizontal" method="post">
        @include('admin.pages.form')
    </form>

@endcomponent
