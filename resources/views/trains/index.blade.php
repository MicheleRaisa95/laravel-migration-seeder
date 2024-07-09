<!DOCTYPE html>
<html>
<head>
    <title>Trains</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train->azienda }} - {{ $train->stazione_partenza }} -> {{ $train->stazione_arrivo }} 
                ({{ $train->orario_partenza }} - {{ $train->orario_arrivo }}) 
                - Codice Treno: {{ $train->codice_treno }} - Numero Carrozze: {{ $train->numero_carrozze }}
                - In orario: {{ $train->in_orario ? 'Sì' : 'No' }} - Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
