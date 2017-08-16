<?php include_once 'logic.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>[Titre]</title>
    </head>
    <body>
        <h1>[Titre]</h1>

        <p>[Expliquer]</p>

        <form method="post">
            <ul>
                <?php foreach ($questions as $index => $value): ?>
                    <?php if ($questionIndicationSeparator['index'] === $index): ?>
                        <li>
                            <b><?php echo $questionIndicationSeparator['indication']; ?></b>
                            <hr />
                        </li>
                    <?php endif; ?>
                    <li>
                        <?php echo $value; ?>
                    </li>
                    <li>
                        <?php for ($i = 1; $i <= 7; $i++): ?>
                            <label>
                                <input type="radio" name="question-<?php echo $index; ?>" value="<?php echo $i; ?>" />
                                <?php echo $i; ?>
                                &nbsp;
                            </label>
                        <?php endfor; ?>
                        <hr />
                    </li>
                <?php endforeach; ?>
            </ul>

            <p>
                <input type="submit" name="submit" value="Valider" />

                <?php if ($errorMessage): ?>
                    <br />
                    <i><?php echo $errorMessage; ?></i>
                <?php elseif ($message): ?>
                    <br />
                    <b><?php echo $message; ?></b>
                <?php endif; ?>
            </p>
        </form>
    </body>
</html>
