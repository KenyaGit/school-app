@foreach ($vakkens as $vak)
    <h2>{{ $vak->vaknaam;}}</h2>
    <p>{{ $vak->vakbeschrijving;}}</p>
    <p>{{ $vak->docenten_id;}}</p>
@endforeach