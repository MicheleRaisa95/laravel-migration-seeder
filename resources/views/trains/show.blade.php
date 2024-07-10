<!DOCTYPE html>
<html>
<head>
    <title>Dettagli Treno</title>
</head>
<body>
    <h1>Dettagli del Treno</h1>
    <ul>
        <li>Azienda: {{ $train->azienda }}</li>
        <li>Stazione di Partenza: {{ $train->stazione_partenza }}</li>
        <li>Stazione di Arrivo: {{ $train->stazione_arrivo }}</li>
        <li>Orario di Partenza: {{ $train->orario_partenza }}</li>
        <li>Orario di Arrivo: {{ $train->orario_arrivo }}</li>
        <li>Codice Treno: {{ $train->codice_treno }}</li>
        <li>Numero Carrozze: {{ $train->numero_carrozze }}</li>
        <li>In Orario: {{ $train->in_orario ? 'Sì' : 'No' }}</li>
        <li>Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</li>
    </ul>
    <a href="{{ url('/') }}">Torna alla lista dei treni</a>
</body>
</html>
