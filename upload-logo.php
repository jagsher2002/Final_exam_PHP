<?php
$title = 'Upload Logo';
require 'include/header.php';
?>

<main class="container">
    <h1>Upload Logo</h1>
    <form method="post" action="save-logo.php" enctype="multipart/form-data">
        <fieldset class="p-2">
            <label for="logo" class="col-2">Logo:</label>
            <input name="logo" id="logo" type="file" accept="image/png" required />
        </fieldset>
        <button class="btn btn-primary">Upload</button>
    </form>
</main>

</body>
</html>