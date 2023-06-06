@extends('layouts.app')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/pages/author/index.min.css') }}">
@endsection

@section('content')
  <main class="author-page container">
    <div class="author-page__author">
      <img
        class="author-page__image"
        src="{{ asset('images/author.jpg') }}"
        width="419"
        height="421"
        alt="Zafar Mirzo"
        loading="lazy">
    </div>

    <h1 class="author-page__title">
      Author's site <br>
      Zafar Mirzo
    </h1>

    <div class="author-page__info">
      <p class="author-page__info-item">
        Social entrepreneur & Chairman. I also engage in philosophical creativity.
      </p>
      <p class="author-page__info-item">
        May 1, 1972
      </p>
      <p class="author-page__info-item">
        Social media:
        <a
          style="
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 24px;
            height: 24px;
            color: #111;
          "
          href="https://twitter.com/zafar_mirzo"
          title="Twitter"
          target="_blank"
        >
          <svg width="20" height="16">
            <use xlink:href="{{ asset('images/stack.svg') }}#twitter" />
          </svg>
        </a>
      </p>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/pages/author/index.min.js') }}" type="module"></script>
@endsection
