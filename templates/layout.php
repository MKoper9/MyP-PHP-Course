<html>
<head>

</head>

<body>
<div class="container">
    <div class="menu">
        <h1>Moje notatki</h1>
        <ul>
            <li>
                <a href="/">Lista notatek</a>
            </li>
            <li>
                <a href="/?action=create">Nowa notatka</a>
            </li>
        </ul>
    </div>
    <div>
        <?php
            require_once("templates/pages/$page.php");
        ?>
    </div>
</div>

<div class="footer">
    STOPKA
</div>

</body>
</html>
