<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <title>fisen och hasse</title>

  <style>
    body { color: #c5a682; }
    .bg-beige { background: #f8f6e8; }
    * { border-color: #c5a682;}
  </style>

</head>
<body>

<div class="w-full">

  <div class="w-full bg-beige">
    <div class="mx-auto max-w-4xl px-6 sm:flex items-center py-12">
      <img class="w-16 sm:w-32" src="/images/flower.png" alt="">
      <p class="mt-6 sm:mt-0 sm:pl-12">
        Till er som var där på vigseln, middagen och festen. Till er som planerat, organiserat och fixat under ett helt år. Till er som gav oss lyckoönskningar och fina gåvor. Till er som skulle vart där men fick se oss från himlen. TACK!
        <br><br>
        Vi har samlat ihop våra favoritbilder från dagen, kvällen och natten.<br>Ladda ner dem oredigerade <a target="_blank" class="border-b-2" href="https://www.dropbox.com/s/7f4bs5ukzs7s0hu/tjugondejuli-pics.zip?dl=0">här</a>.
      </p>
    </div>
  </div>

  <div class="bg-white w-full mt-16 px-6">
    <div class="mx-auto max-w-4xl">
      <?php

        $dir = "images/*.{jpg,JPG,jpeg}";
        $images = glob( $dir, GLOB_BRACE );

        foreach( $images as $image ):
            echo "<img loading='lazy' class='mb-12 shadow-lg lazyload' data-src='" . $image . "' />";
        endforeach;

      ?>
    </div>
  </div>

  <script>
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll("img.lazyload");
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
      let script = document.createElement("script");
      script.async = true;
      script.src =
        "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
      document.body.appendChild(script);
    }
  </script>

</div>

</body>
</html>
