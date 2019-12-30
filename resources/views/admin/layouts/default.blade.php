<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title ?? 'Iniciando com Laravel' }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/admin">Laravel 5.4</a>
        </nav>
        <main>
            <section class="container">
                {{ $slot }}
            </section>
        </main>
        <script src="/js/app.js"></script>
    </body>
</html>
