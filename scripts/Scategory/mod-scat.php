<?php
require_once('../connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modifier_sous_categorie'])) {
        $id_sous_categorie = mysqli_real_escape_string($conn, $_POST['id_sous_categorie']);
        $nouveau_nom_sous_categorie = mysqli_real_escape_string($conn, $_POST['nouveau_nom_sous_categorie']);
        $requete_update = "UPDATE scategories SET scat_name = '$nouveau_nom_sous_categorie' WHERE id = $id_sous_categorie";

        if (mysqli_query($conn, $requete_update)) {
            echo '<div class="alert alert-success mt-4" role="alert">
                    Sous-catégorie mise à jour avec succès !
                  </div>';
        } else {
            echo '<div class="alert alert-danger mt-4" role="alert">
                    Erreur lors de la mise à jour de la sous-catégorie : ' . mysqli_error($conn) . '
                  </div>';
        }
    }
}

$requete_sous_categories = "SELECT id, scat_name FROM scategories";
$resultat_sous_categories = mysqli_query($conn, $requete_sous_categories);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Sous-catégorie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Modifier une Sous-catégorie</h2>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="id_sous_categorie">Sélectionner la Sous-catégorie à Modifier :</label>
                    <select class="form-control" name="id_sous_categorie" id="id_sous_categorie" required>
                        <?php while ($row = mysqli_fetch_assoc($resultat_sous_categories)) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['scat_name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nouveau_nom_sous_categorie">Nouveau Nom de Sous-catégorie :</label>
                    <input type="text" class="form-control" id="nouveau_nom_sous_categorie" name="nouveau_nom_sous_categorie" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="modifier_sous_categorie">Modifier la Sous-catégorie</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
mysqli_close($conn);
?>
