@extends('layouts.app')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/pages/index.min.css') }}">
@endsection

@section('content')
  <main class="home-page container">
    <h1 class="visually-hidden">Philosophical creativity</h1>

    <section class="quotes">
      <h2 class="visually-hidden">Author's thoughts</h2>

      <ul class="quotes__list">
        @foreach ($data->quotes as $quote)
          <li class="quotes__item">
            <x-quote-card :quote="$quote" />
          </li>
        @endforeach
      </ul>

      {{ $data->quotes->links('components.pagination') }}
    </section>

    <aside class="posts">
      <h2 class="visually-hidden">Pictures</h2>

      <ul class="posts__list">
        @foreach ($data->posts as $post)
          <li class="posts__item">
            <x-post-card :post="$post" />
          </li>
        @endforeach
      </ul>
    </aside>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/pages/index.min.js') }}" type="module"></script>
@endsection
