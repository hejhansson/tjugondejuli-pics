<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <title>tjugondejuli.se</title>

  <style>
    body { background: #f8f6e8; color: #c5a682; }
    * { border-color: #c5a682;}
  </style>

</head>
<body>

<div class="mx-auto max-w-4xl mb-16 px-6">

  <div class="w-full sm:flex items-center my-12">
    <img class="w-16 sm:w-32" src="/images/flower.png" alt="">
    <p class="mt-6 sm:mt-0 sm:pl-12">



      Till er som var där på vigseln, middagen och festen. Till er som planerat, organiserat och fixat under ett helt år. Till er som gav oss lyckoönskningar och fina gåvor. Till er som skulle vart där men fick se oss från himlen. TACK!
<br><br>
      Vi har samlat ihop våra favoritbilder från dagen, kvällen och natten.<br>Ladda ner dem oredigerade <a target="_blank" class="border-b-2" href="https://www.dropbox.com/s/ki7jb378s6phqxk/tjugondejuli-pics.zip?dl=0">här</a>.
    </p>
  </div>

  <?php

    $dir = "images/*.{jpg,JPG,jpeg}";
    $images = glob( $dir, GLOB_BRACE );

    foreach( $images as $image ):
        echo "<img class='mb-12 shadow-md' src='" . $image . "' />";
    endforeach;

  ?>

</div>

</body>
</html>
