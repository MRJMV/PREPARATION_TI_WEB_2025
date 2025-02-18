<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav>
            <?php
            include "inc/navIncView.php";
            ?>
        </nav>
    </header>
    <h1>
        <?= $title ?>
    </h1>
    <section>
        <div>
            <form action="">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="Belgique">Belgique</option>
                    <option value="Pays-Bas">Pays-Bas</option>
                    <option value="Allemagne">Allemagne</option>
                </select>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
    <footer>
        <?php
        include "inc/footerIncView.php";
        ?>
    </footer>
</body>

</html>