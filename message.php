<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact</title>
    <link rel="stylesheet" href="assets_contact/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_contact/css/some-message.css">
    <link rel="stylesheet" href="assets_contact/css/styles.css">
</head>

<body>
    <?php
    include("../conn.php");
    $result = $bdd->query('SELECT * FROM contact');

    while ($cont = $result->fetch()) : ?>
        <div class="d-flex shadow" id="some-message" style="margin-bottom:30px;">
            <div class="content">
                <h3>Objet :&nbsp; <?php echo $cont['subject']; ?></h3>
                <p><?php echo $cont['message']; ?></p>
                <div class="container"><span style="margin: 6%;"><?php echo $cont['name']; ?></span><span style="margin: 6%;"><?php echo $cont['email']; ?></span><span style="margin: 6%;"><?php echo $cont['created_at']; ?></span></div>
                <div></div>
            </div>
        </div>
    <?php endwhile; ?>
    <script src="assets_contact/js/jquery.min.js"></script>
    <script src="assets_contact/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>