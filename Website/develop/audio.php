<?php
$title = "Develop";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$page = "audio";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 10000000) {
        echo "only 10MB";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "ogg" && $imageFileType != "mp3") {
        echo "nice try lol";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-5 p-3 bg-body-secondary rounded shadow">
    <h2>Develop</h2>
    <hr>
    <div class="d-flex align-items-start">
        <?php include_once "sidebar.php" ?>
        <style>
            .upload-form {
                margin-top: 10px;
            }

            input[type="file"] {
                display: none;
            }

            input[type="file"]::-webkit-file-upload-button {
                display: none;
            }

            .custom-upload-btn {
                display: block;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
        </style>
        <div class="container mt-5 p-3">
            <?php if (isset($_GET["error"])) { ?>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p><?= htmlspecialchars($_GET["error"]) ?></p>
                </div>
            <?php } ?>
            <h2>Upload Audios</h2>
            <hr>
            <form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
                <label for="fileToUpload" class="custom-upload-btn">Select Audio to Upload (12MB Limit)</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div>

    </div>
</div>
<?php echo PageBuilder::buildFooter(); ?>