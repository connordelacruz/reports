
<!DOCTYPE html>
<html lang="en">
<?php
include_once 'templates/header.php';
include_once 'config/config.php';
?>
<body>

<div class="container">
    <h1>Report Generator</h1>

    <div class="well-sm text-muted">Database: <?php echo $SQL_DATABASE; ?></div>

    <div class="well">
        <form class="form-vertical" id="report-options" action="report.php" method="post" target="_blank">
            <fieldset>
                <legend>Table</legend>
                <div class="form-group" id="table-select-div"></div>
            </fieldset>

            <div class="collapse" id="column-select-div">
                <fieldset>
                    <legend>Columns</legend>
                    <div class="form-group">
                        <label class="control-label" for="column-select">Columns to display:</label>
                        <div id="column-select"></div>
                        <div id="generate-report-div">
                            <button class="btn btn-primary" type="submit" name="generate-report" id="generate-report" disabled>Generate Report</button>
                            <button class="btn btn-success" type="submit" name="export-csv" id="export-csv" disabled>Download Report as CSV</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <!-- TODO: collapse fieldset by default -->
                    <legend>Advanced Options</legend>
                    <div class="form-group">
                        <!-- TODO: disable/collapse #row-limit -->
                        <input type="checkbox" class="switch-input"
                               id="toggle-row-limit" name="toggle[]" value="row-limit">
                        <label for="toggle-row-limit" class="switch-label">
                            Limit number of rows
                        </label>
                        <div class="collapse" id="collapse-row-limit">
                            <input class="form-control" type="number" disabled
                                   name="row-limit" id="row-limit" placeholder="Number of rows to display">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="error-div"></div>
        </form>
    </div>

</div>

</body>
</html>