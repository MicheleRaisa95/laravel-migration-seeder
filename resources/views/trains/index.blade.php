<!DOCTYPE html>
<html>
<head>
    <title>Treni in Partenza</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    @if($trains->isEmpty())
        <p>Nessun treno in partenza oggi.</p>
    @else
        <ul>
            @foreach ($trains as $train)
                <li>
                    <a href="{{ route('trains.show', $train->id) }}">
                        {{ $train->azienda }} - {{ $train->stazione_partenza }} -> {{ $train->stazione_arrivo }} 
                        ({{ $train->orario_partenza->format('H:i') }} - {{ $train->orario_arrivo->format('H:i') }}) 
                        - Codice Treno: {{ $train->codice_treno }} - Numero Carrozze: {{ $train->numero_carrozze }}
                        - In orario: {{ $train->in_orario ? 'Sì' : 'No' }} - Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
