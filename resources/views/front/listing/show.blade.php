<h1>{{ $listing->name }}</h1>
<p>{{ $listing->description }}</p>

<h2>Details</h2>
<ul>
    <li><strong>Type:</strong> {{ \App\Domain\Listings\Enums\ListingType::getDescription($listing->type) }}</li>
</ul>

<hr>

<h2>Rooms</h2>
<ul>
    @foreach($listing->rooms as $room)
    <li>
        <strong>{{ $room->name }}</strong><br>
        {{ $room->description }}
    </li>
    @endforeach
</ul>
