<?php
$title = "Admin Panel";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"]) || $_SESSION["user"]["admin"] < 3) {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="content">
    <div id="HomeContainer" class="row home-container" data-update-status-url="/home/updatestatus">

        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Admin Panel</h1>
                </div>
                <div class="col-md-3">
                    <h3>Server Status</h3>
                    <p>CPU Usage: <%= cpuUsage %>%</p>
                    <p><b><%= jobs %></b> job(s) running
                        <!--, <b>0</b> players-->
                    </p>
                    <!--
                        <a href="#/about"><b>0</b> UGC assets queued,</a>
                        <a href="#/about"><b>0</b> user reports</a>-->
                    <!-- a line between a new row -->
                    <hr>
                    <%- adminNav %>
                </div>
                <div class="col-md-9" style="overflow: visible">
                    <!-- <div class="navbar-expand-md md-auto text-center">
                                <h3 class="alert-warning" style="padding:0.9rem;">Admin panel is WIP.</h3>
                            </div> -->
                    <h3>Config Settings</h3>
                    <p>Be careful of what you do here, changes apply in real-time.</p>
                    <p>Website configuration (live and static)</p>
                    <table class="table" id="fflaglistings">
                        <tr>
                            <th>Name</th>
                            <th>Default Value</th>
                            <th>Description</th>
                        </tr>
                        <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
                    </table>
                    <hr>
                    <form action="/v1/admin/getconfig" method="post">
                        <input type="text" name="fflag" placeholder="Name" value="">
                        <input type="submit" value="Get Value">
                    </form>
                    <p>&nbsp;</p>
                    <form action="/v1/admin/setconfig" method="post">
                        <input type="text" name="fflag" placeholder="Name" value="">
                        <input type="text" name="value" placeholder="Value" value="">
                        <input type="submit" value="Set Value">
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>

<?php echo PageBuilder::buildFooter(); ?>