<h1>{{ $character->character_name }}</h1>

@foreach ( $character->awards as $award )
<li>{{ $award->filename }}</li>
@endforeach