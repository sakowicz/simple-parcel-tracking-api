<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Projekt z Aplikacji Mobilnych</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="container">
	  <div class="card mt-5">
		  <div class="card-header">
		    Projekt z Aplikacji Mobilnych
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">
		      <p>Jest to serwis webowy, który udotępnia API do trackingu paczek.</p>
		      <footer class="blockquote-footer">API jest dostępne pod adresem: <code>{{ url('/') }}/api/parcel/{numer_paczki}</code></footer>
		    </blockquote>
		    <p class="mt-5">Numery paczek w serwisie, które można śledzić:</p>
		    <ul class="list-group list-group-flush">
		    	@foreach($parcels as $parcel)
			  	<li class="list-group-item"><a href="/api/parcel/{{ $parcel->number }}">{{ $parcel->number }}</li></a>
			  	@endforeach
			</ul>
		  </div>
	</div>
</div>
<footer class="footer">
      <div class="container text-right">
        <span class="text-muted">&copy Szymon Sakowicz</span>
      </div>
    </footer>

</body>
</html>
