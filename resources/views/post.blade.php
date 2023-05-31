<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  @foreach($posts as $post)

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Comments</p>
    <ul>
      <li>{{ $post->comment }}</li>
    </ul>
    <br/>

	@endforeach

  Halaman : {{ $posts->currentPage() }} <br/>
	Jumlah Data : {{ $posts->total() }} <br/>
	Data Per Halaman : {{ $posts->perPage() }} <br/>
  {{ $posts->links() }}
</body>
</html>