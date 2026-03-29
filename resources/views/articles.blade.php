{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Articles</title>
    <!-- On inclut Bootstrap via un CDN (c'est une URL qui charge le CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenue sur la liste des articles</h1>

        @if($articles->count()>0)
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article -> title }}</h5>
                            <p class="card-text"> {{ $article -> content }}</p>
                            <small class="text-muted"> Cree le {{ $article -> created_at-> format('d/m/y') }}</small>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
            @else
                <div class="alert alert-info">
                    Aucun article pour le moment
                </div>
        @endif
        
    </div>
</body>
</html> --}}