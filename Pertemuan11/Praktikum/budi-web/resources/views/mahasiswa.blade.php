<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unguided - Blade Loop</title>
  <style>
    body{font-family:Arial, sans-serif; padding:24px;}
    h2{margin-top:24px;}
    ul{line-height:1.8;}
    .box{padding:12px 16px; border:1px solid #ddd; border-radius:10px; margin-top:10px;}
  </style>
</head>
<body>
  <h1>Unguided: Blade Template Engine</h1>

  <h2>1) For (1–10)</h2>
  <div class="box">
    @for ($i = 1; $i <= 10; $i++)
      {{ $i }}@if($i < 10), @endif
    @endfor
  </div>

  <h2>2) While (1–10)</h2>
  <div class="box">
    @php $j = 1; @endphp
    @while ($j <= 10)
      {{ $j }}@if($j < 10), @endif
      @php $j++; @endphp
    @endwhile
  </div>

  <h2>3) Foreach (Nilai Mahasiswa)</h2>
  <div class="box">
    <ul>
      @foreach ($nilai as $n)
        <li>Nilai: {{ $n }}</li>
      @endforeach
    </ul>
  </div>
</body>
</html>
