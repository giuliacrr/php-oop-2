<?php
require_once __DIR__ . '/Classes/Categories/Cats.php';
require_once __DIR__ . '/Classes/Categories/Dogs.php';
require_once __DIR__ . '/Classes/Products/Beds.php';
require_once __DIR__ . '/Classes/Products/Foods.php';
require_once __DIR__ . '/Classes/Products/Toys.php';
require_once __DIR__ . '/data/prods.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <title>Php - Pet Shop</title>
</head>
<body>
  <main>
    <header class="bg-primary">
      <div class="container text-center text-white pt-3 pb-3">
        <h1>Pet Shop</h1>
      </div>
    </header>
    <main>
      <div class="container mt-5 mb-5">
        <div class="box-disp d-flex flex-wrap justify-content-center">
          <!--Start Card-->
          <?php foreach ($prods as $prod) { ?>
          <div class="card mt-1 mb-1" style="width: 18rem;">
            <img src="<?php echo ($prod->getImage()) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <!--Cat or Dog icon-->
              <span>
                <?php if ($prod->getCategory() === "dog") {
                  $pet = new Dogs(); ?>
                <?php echo $pet->getIcon() ?>
                <?php } elseif ($prod->getCategory() ==="cat") {
                  $pet = new Cats(); ?>
                <?php echo $pet->getIcon()?>
                <?php } ?>
              </span>
              <!--end cat or dog-->
              <!--Big or small-->
              <span>
                <?php if ($prod->getSize()=== 'Big') { ?>
                <?php echo "Size: " . $prod->getSize() ?>
                <?php } elseif ($prod->getSize() === 'Medium') { ?>
                <?php echo "Size: " . $prod->getSize()?>
                <?php } elseif ($prod->getSize() === 'Small') { ?>
                <?php echo "Size: " . $prod->getSize() ?>
                <?php } ?>
              </span>
              <!--End big or small-->
              <h5 class="card-title fw-bold"><?php echo ($prod->getName()) ?></h5>
              <p class="card-text"><?php echo ($prod->getDescription()) ?></p>
              <a href="#" class="btn btn-primary fw-bold">Buy it for <?php echo ($prod->getPrice()) ?>$</a>
            </div>
          </div>
          <?php } ?>
          <!--End Card-->
        </div>
      </div>
    </main>
  </main>
</body>
</html>