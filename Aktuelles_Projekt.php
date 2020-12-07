<?php
$title = 'ToDo';
?>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>


            <!--Hauptkomponente -->
            <div class="col-9">
                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-header">ToDo:</div>
                            <ul class="list-group">
                                <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                                <li  class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                                <div class="card-header">Erledigt:</div>
                            <ul class="list-group">
                              <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                              <li  class="list-group-item">Kaffee trinken (Petra Müller)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                                <div class="card-header">Verschoben:</div>
                            <ul class="list-group">
                                <li class="list-group-item">Lernen (Max Mustermann)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<?php include("footer.php"); ?>

