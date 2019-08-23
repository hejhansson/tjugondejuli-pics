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
  </style>

</head>
<body>

<div class="mx-auto max-w-4xl mb-16 px-6">

  <div class="w-full sm:flex items-center my-12">
    <img class="w-16 sm:w-32" src="/images/flower.png" alt="">
    <p class="mt-6 sm:mt-0 sm:pl-12">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, rerum. Mollitia qui, laudantium quibusdam eius suscipit quasi illum dolor neque perferendis ad? Suscipit a explicabo doloremque assumenda neque quae necessitatibus.
    </p>
  </div>

  <?php 

    $dir = "images/*.jpg";
    $images = glob( $dir );

    foreach( $images as $image ):
        echo "<img class='mb-6' src='" . $image . "' />";
    endforeach;

  ?>

</div>
  
</body>
</html>