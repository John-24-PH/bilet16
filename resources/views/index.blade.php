<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planificare de evenimente</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Planificator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("events.create")}}">Evenimente</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
@foreach ($events as $event)
    <div class="event-container">
            <h2>Evenimentul 01</h2>
            <p>Cumatrie</p>
            <p>Data: 2025-24-05</p>
            <p>Locația: Flamingo</p>
            <a href="{{route('edit', ['event' => $event->id]) }}" class="btn btn-primary">Creaza</a>
            <form action="#" method="POST" style="display: inline-block;">
                <button type="submit" class="btn btn-danger">Sterge</button>
            </form>
        </div>
@endforeach

    
</body>
</html>
