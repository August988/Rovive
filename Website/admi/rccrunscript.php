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
                    <h3>RCCService Script Execution</h3>
                    <p>Here you can create new jobs and queue high level luau script execution.</p>
                    <p>You can also execute luau scripts on already existsing jobs. (Like game instances)</p>
                    <p>&nbsp;</p>
                    <form action="/v1/admin/rccrunscript" method="post">
                        <b>
                            <p><label for="script">Script:</label></p>
                            <textarea name="script" id="script" cols="80" rows="10"></textarea>
                        </b>
                        <p>
                            <input type="submit" name="submit" value="Run Script">
                        </p>
                        <p>
                            <label for="jobid">Job ID:</label>
                            <select name="jobid" id="jobid">
                                <%- someJobs %>
                            </select>
                        <p><label for="jobid2">Job ID (Manual):</label></p>
                        <input name="jobid2" id="jobid2"></input>
                        </p>
                        <p>
                            <input type="radio" name="jobtype" id="newjob" value="newjob" checked="checked">
                            <label for="newjob">Run as a new job</label>
                            <input type="radio" name="jobtype" id="existingjob" value="existingjob">
                            <label for="existingjob">Run on an existing job</label>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>