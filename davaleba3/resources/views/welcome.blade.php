<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
  <table border = "1">
  <tr>
    <td>name</td>
    <td>views</td>
    <td>src</td>
  </tr>
  @foreach ($youtubes as $video)
  <tr>
    <td>{{ $video->name }}</td>
    <td>{{ $video->views }}</td>
    <td>{{ $video->src }}</td>
  </tr>
  @endforeach
  </table>
</body>
</html>