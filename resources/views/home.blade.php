<!DOCTYPE html>
<html>
<body>

		<h1>Numer paczki: {{ $parcels->number }}</h1>
		    
			@foreach($statuses as $status)
			<p> {{$status->id}} Status: {{$status->title}}</p>
			<span> Opis: {{$status->description}}</span><br>
			<span> Lokalizacja: {{$status->location}}</span><br>
			<span> Czas: {{$status->updated_at}}</span>
			@endforeach
</body>
</html>
