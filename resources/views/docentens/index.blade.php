@foreach ($docentens as $docent)
    <h2>{{ $docent->datum_van_invoer;}}</h2>
    <p>{{ $docent->voornaam;}}</p>
@endforeach
