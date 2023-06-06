<ul>
  @if (count($data->quotes) == 0)
    <li>Nothing found</li>
  @endif
  @foreach ($data->quotes as $quote)
    <li>
      <a href="{{ route('quotes.selected', $quote->slug) }}">
        {{ $quote->quote }}
      </a>
    </li>
  @endforeach
</ul>
