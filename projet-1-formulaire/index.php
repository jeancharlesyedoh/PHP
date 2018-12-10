<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylessheet" href="form.css">
</head>
<body>
<div class="container">

  <?php  
       

        if (isset($_POST['nom']))

            {  
                echo "Nom : ".$_POST['nom'].'<br/>';
            }
        
    ?>

    <form action="index.php" method="POST">

    

        <div class="form-row">
            <h1> Contacts-nous</h1>
            <div class="form-check col-lg-12">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Monsieur
                </label> 
            </div>
            <div class="form-check col-lg-12">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Madame
                </label> 
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Nom" name="nom" maxlength="7" required>
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Prenoms" name="prenom" title="Saisir votre nom" maxlength="7" required>
            </div>
            <div class="form-group col-lg-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"  required>
            </div>
            <div class="form-group col-lg-12" >
                <label for="inputState" >Pays</label>
                <select id="inputState" class="form-control">
                    <option>Belgique</option>
                    <option>Côte d'Ivoire</option>
                    <option>France</option>
                    <option>Italie</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <select class="custom-select" >
                <option value="">Sujet</option>
                <option value="1"></option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <div class="form-group col-lg-12">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
            <div class="col-lg-12">
                 <button type="submit" class="btn btn-primary mb-2" name="ok" title="Valider vos données">Submit</button>
            </div>
        </div>
    </form>

</div>
    
</body>
</html>