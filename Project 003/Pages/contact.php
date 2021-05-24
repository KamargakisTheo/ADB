<?php
  
      function getArrayValue(array $array, string $value)
          {
          if (isset($array[$value]))
              return htmlspecialchars ($array[$value]) ;
          return "";
          }
  
      $firstname = getArrayValue($_POST, "firstname");
      $lastname = getArrayValue($_POST, "lastname");
      $description = getArrayValue($_POST, "description");
  
      $sexe["male"] = getArrayValue($_POST, "sexe") == "male" ? "selected" : "";
      $sexe["female"] = getArrayValue($_POST, "sexe") == "female" ? "selected" : "";
      $sexe["autre"] = getArrayValue($_POST, "sexe") == "autre" ? "selected" : "";
  
      $condition = getArrayValue($_POST, "condition") == true ? "checked" : "";
  
      $where["mons"] =  getArrayValue($_POST, "where") == "mons" ? "checked" : "";
      $where["liyue"] =  getArrayValue($_POST, "where") == "liyue" ? "checked" : "";
  
      $email = getArrayValue($_POST, "email");
      $email=filter_var($email,FILTER_VALIDATE_EMAIL );
  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Délice Impact</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html">Accueil</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="produit.html">Produit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pics.html">Image</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="where.html">Où nous trouver</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Nous contacter</a>
                  </li>
                </ul>
                <img id="paimon" src="../IMG/paimon.gif" class="rounded-circle position-absolute top-50 end-0 translate-middle-y" alt="paimon">
              </div>
            </div>
          </nav>
    </header>
<main>
<div class="d-flex justify-content-xl-around flex-nowrap bd-highlight text-center p-5">
<span class="container-lg p-5">
    <form action="contact.php" method="post">
        <div class="maindiv">
            <div class="row">
                <div><label>Nom: </label></div>
                <div><input type="text" name="firstname" value="<?php echo $firstname; ?>" /></div>
            </div>
            <div class="row">
                <div><label>Prénom: </label></div>
                <div><input type="text" name="lastname" value="<?php echo $lastname; ?>" /></div>
            </div>
            <div class="row">
                <div><label>Email: </label></div>
                <div><input type="text" name="email" value="<?php echo $email; ?>" /></div>
            </div>
            <div class="row">
                <div><label>Sexe: </label></div>
                <div>
                    <select name="sexe">
                        <option value="male" <?php echo $sexe["male"]; ?>>Homme</option>
                        <option value="female" <?php echo $sexe["female"]; ?>>Femme</option>
                        <option value="other" <?php echo $sexe["autre"]; ?>>Autre</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div><label for="mons">Au bon chasseur</label></div>
                <div><input type="radio" name="where" value="mons"
                <?php echo $where["mons"]; ?> /></div>
            </div>
            <div class="row">
                <div><label for="liyue">Wammin's restaurent</label></div>
                <div><input type="radio" name="where" value="liyue"
                <?php echo $where["liyue"]; ?> /></div>
            </div>
        <div class="row">
            <div><label>Description: </label></div>
            <div><input type="textarea" name="description" value="<?php echo $description; ?>" /></div>
        </div>
        <div class="row">
            <div><label for="condition">Lu et accepter les condition : </label></div>
            <div><input type="checkbox" name="condition" class="condition" <?php echo $condition; ?> />
            </div>
        </div>
        <div class="row">
                <div></div>
                <div><input type="submit"></div>
            </div>
        </div>
    </form>
</span>
</div>
</main>
    <footer class="foo">
      <p>&copy; Délice Impact</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>