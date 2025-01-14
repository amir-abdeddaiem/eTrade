<?php
require_once('../connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['supprimer_categorie'])) {
        $id_categorie = mysqli_real_escape_string($conn, $_POST['id_categorie']);

        $requete_suppression = "DELETE FROM categories WHERE id = $id_categorie";

        if (mysqli_query($conn, $requete_suppression)) {
            echo '<div class="alert alert-success" role="alert">
                    Catégorie supprimée avec succès !
                  </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Erreur lors de la suppression de la catégorie : ' . mysqli_error($conn) . '
                  </div>';
        }
    }
}

$requete_categories = "SELECT id, cat_name FROM categories";
$resultat_categories = mysqli_query($conn, $requete_categories);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une Catégorie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Supprimer une Catégorie</h2>
    
    <form method="post" action="">
        <div class="form-group">
            <label for="id_categorie">Sélectionner la Catégorie à Supprimer :</label>
            <select class="form-control" name="id_categorie" id="id_categorie" required>
                <?php while ($row = mysqli_fetch_assoc($resultat_categories)) : ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-danger" name="supprimer_categorie">Supprimer la Catégorie</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
mysqli_close($conn);
?>
