

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la Recherche</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<div class="container">
    <?php
require ('scripts/connect.php');
if (isset($_GET['rechercher']) && !empty($_GET['rechercher'])) {
        $recherche = mysqli_real_escape_string($conn, $_GET['rechercher']);
        $requete = "SELECT DISTINCT * FROM products WHERE prod_name LIKE '%$recherche'";
        $resultat = mysqli_query($conn, $requete);
        echo "<h2 class='mt-4'>Résultats de la recherche pour '{$recherche}'</h2>";
        if (mysqli_num_rows($resultat) > 0) {
            while ($row = mysqli_fetch_assoc($resultat)) {
                echo '
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                    <div class="axil-product product-style-one">
                        <div class="thumbnail">
                            <a href="detail-produit.php?id='.$row['id'].'">
                                <img class="hover-img" src="images/'.$row['image'].'" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    <li class="select-option">
                                        <a href="single-product.html">
                                            Add to Cart
                                        </a>
                                    </li>
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            
        } else {
            echo "<p class='mt-4'>Aucun produit trouvé.</p>";
        }
    }
    mysqli_close($conn);
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
