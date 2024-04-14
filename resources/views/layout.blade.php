<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Postcha</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-icon.png') }}">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<style>

  @media (min-width: 768px) { 
  .md\:w-1\/3 {
    width: calc(33.333% - 2rem); 
  }
}
  </style>
<body>
    <div class="container">
        @yield('content')
      </div>
</body>
</html>
