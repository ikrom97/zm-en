@props([
    'class' => null,
    'selectedTag' => null,
    'quote',
])

@php
  $className = $class ? "$class quote-card" : 'quote-card';
@endphp

<blockquote class="{{ $className }} tags-hidden">
  <a
    class="quote-card__link"
    href="{{ route('quotes.selected', $quote->slug) }}"
  >
    #{{ str_pad($quote->slug, 4, '0', STR_PAD_LEFT) }}
  </a>

  <div class="quote-card__top">
    <q class="quote-card__quote">{{ $quote->quote }}</q>

    <div class="quote-card__tags">
      @if ($selectedTag)
        <a class="quote-card__tag quote-card__tag--current">
          <svg
            width="6"
            height="10"
          >
            <use xlink:href="{{ asset('images/stack.svg') }}#triangle" />
          </svg>
          {{ $selectedTag->title }}
        </a>
      @endif
      @foreach ($quote->tags as $tag)
        @if ($tag != $selectedTag)
          <a
            class="quote-card__tag"
            href="{{ route('tags.selected', $tag->slug) }}"
          >
            <svg
              width="6"
              height="10"
            >
              <use xlink:href="{{ asset('images/stack.svg') }}#triangle" />
            </svg>
            {{ $tag->title }}
          </a>
        @endif
      @endforeach
    </div>
  </div>

  <footer class="quote-card__bottom">
    @if (count($quote->tags) - 3 > 0)
      <button
        class="quote-card__button"
        type="button"
        aria-label="Show/Hide tags"
        data-show-text="More tags"
        data-hide-text="Hide tags"
      ></button>
    @endif

    <div class="quote-card__share">
      <div class="quote-card__share-links">
        <a
          class="quote-card__share-link"
          title="Facebook"
          href="https://www.facebook.com/sharer/sharer.php?u={{ route('quotes.selected', $quote->slug) }}"
          target="_blank"
        >
          <svg
            width="16"
            height="16"
          >
            <use xlink:href="{{ asset('images/stack.svg') }}#facebook" />
          </svg>
        </a>
        <a
          class="quote-card__share-link"
          title="Twitter"
          href="https://twitter.com/intent/tweet?url={{ route('quotes.selected', $quote->slug) }}"
          target="_blank"
        >
          <svg
            width="12"
            height="10"
          >
            <use xlink:href="{{ asset('images/stack.svg') }}#twitter" />
          </svg>
        </a>
        <a
          class="quote-card__share-link"
          title="Telegram"
          href="https://telegram.me/share/url?url={{ route('quotes.selected', $quote->slug) }}"
          target="_blank"
        >
          <svg
            width="16"
            height="16"
          >
            <use xlink:href="{{ asset('images/stack.svg') }}#telegram" />
          </svg>
        </a>
        <button
          class="quote-card__share-link"
          type="button"
          aria-label="Copy"
        >
          <svg
            width="12"
            height="12"
          >
            <use xlink:href="{{ asset('images/stack.svg') }}#copy" />
          </svg>
        </button>
      </div>

      <button
        class="quote-card__share-button"
        type="button"
        aria-label="Share"
      >
        <svg
          width="16"
          height="18"
        >
          <use xlink:href="{{ asset('images/stack.svg') }}#share" />
        </svg>
      </button>
    </div>
  </footer>
</blockquote>
