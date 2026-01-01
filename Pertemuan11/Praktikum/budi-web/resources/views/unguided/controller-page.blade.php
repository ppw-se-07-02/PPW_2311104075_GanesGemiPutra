<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modul 11 - Controller</title>
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;margin:24px}
    .card{max-width:760px;border:1px solid #e5e7eb;border-radius:14px;padding:16px}
    .badge{display:inline-block;padding:4px 10px;border-radius:999px;background:#eef2ff;color:#3730a3}
    ul{line-height:1.8}
  </style>
</head>
<body>
  <div class="card">
    <span class="badge">Controller ✅</span>
    <h1>{{ $title }}</h1>
    <p>{{ $desc }}</p>

    <h3>Link tugas Unguided</h3>
    <ul>
      <li><a href="{{ url('/assets-demo') }}">View + Assets</a></li>
      <li><a href="{{ url('/mahasiswa') }}">Blade Loop</a></li>
      <li><a href="{{ url('/u/home') }}">Router tanpa parameter</a></li>
      <li><a href="{{ url('/u/berita/10') }}">Router dengan parameter</a></li>
      <li><a href="{{ url('/u/kendaraan') }}">Router optional parameter</a></li>
    </ul>
  </div>
</body>
</html>
