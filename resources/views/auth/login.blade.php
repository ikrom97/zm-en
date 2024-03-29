<!DOCTYPE html>
<html class="page" lang="{{ app()->currentLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicons/favicon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicons/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
  <link rel="stylesheet" href="{{ asset('css/auth/login.min.css') }}">

  <title>Login | Author's site Zafar Mirzo</title>
</head>

<body class="page__body">
  <form class="login" action="{{ route('auth.check') }}" method="post">
    <h1 class="login__title title">Login</h1>
    <div class="login__error"></div>

    <div class="form-element">
      <label class="visually-hidden" for="login">Login</label>
      <input
        class="text-field"
        id="login"
        name="login"
        type="text"
        placeholder="Login"
        autocomplete="off">
    </div>

    <div class="form-element">
      <label class="visually-hidden" for="password">Password</label>
      <input
        class="text-field"
        id="password"
        type="password"
        placeholder="********"
        autocomplete="off">
    </div>

    <button class="button submit-button" type="submit" disabled>Войти</button>
  </form>

  <script src="{{ asset('js/auth/login.min.js') }}" type="module"></script>
</body>

</html>
