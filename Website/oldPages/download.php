<?php
$title = "Download";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>

<style>
    .download-item {
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        transition: background-color 0.3s ease;
    }

    .download-item:hover {
        background-color: var(--bs-secondary);
    }
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4">Downloads</h1>
    <div id="downloads" class="row"></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'downloads.json',
            dataType: 'json',
            success: function(data) {
                const downloadsContainer = document.getElementById('downloads');
                data.forEach(item => {
                    const downloadItem = document.createElement('div');
                    downloadItem.classList.add('col-md-6');
                    downloadItem.innerHTML = `
                            <div class="download-item rounded shadow border-1 border-white">
                                <h3>${item.title}</h3>
                                <p>${item.description}</p>
                                <a class="btn btn-primary download-link" href="${item.fileUrl}" download>Download</a>
                            </div>
                        `;
                    downloadsContainer.appendChild(downloadItem);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching JSON:', error);
            }
        });
    });
</script>

<?php echo PageBuilder::buildFooter(); ?>