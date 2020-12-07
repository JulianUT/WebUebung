<?php $title = 'Aufgaben';?>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>

            <!--Hauptkomponente -->
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="table-responsive-sm table-responsive-md">
                                <table class="table table-bordered table-hover" data-sort-stable="true">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Aufgabenbezeichnung:</th>
                                        <th>Beschreibung der Aufgabe:</th>
                                        <th>Reiter:</th>
                                        <th>Zuständig</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>HTML Datei erstellen</td>
                                        <td>HTML Datei erstellen</td>
                                        <td>ToDo</td>
                                        <td>Max Mustermann</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CSS Datei erstellen</td>
                                        <td>CSS Datei erstellen</td>
                                        <td>ToDo</td>
                                        <td>Max Mustermann</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PC eingeschaltet</td>
                                        <td>PC einschalten</td>
                                        <td>Erledigt</td>
                                        <td>Max Mustermann</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PC eingeschaltet</td>
                                        <td>PC einschalten</td>
                                        <td>Erledigt</td>
                                        <td>Max Mustermann</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kaffee trinken</td>
                                        <td>Kaffee trinken</td>
                                        <td>Erledigt</td>
                                        <td>Petra Müller</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mehr Kaffee trinken</td>
                                        <td>Kaffee trinken</td>
                                        <td>Verschoben</td>
                                        <td>Petra Müller</td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </form>

                        <!--Bearbeiten/Erstellen -->
                        <form>
                            <div class="form-group">
                                <h1>Bearbeiten/Erstellen:</h1>
                                <label for="pName1">Aufgabenbezeichnung:</label>
                                <input type="text" class="form-control" placeholder="Aufgabe" id="pName1">
                            </div>
                            <div class="form-group">
                                <label for="pBeschreibung1">Beschreibung der Aufgabe:</label>
                                <textarea type="text" class="form-control" placeholder="Beschreibung:" id="pBeschreibung1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="time1">Erstellungsdatum:</label>
                                <input type="text" class="form-control" placeholder="DD.MM.YYYY" id="time1">
                            </div>
                            <div class="form-group">
                                <label for="time2">fällig bis:</label>
                                <input type="text" class="form-control" placeholder="DD.MM.YYYY" id="time2">
                            </div>
                            <div class="form-group">
                                <label for="reiter1">Zugehöriger Reiter</label>
                                <select class="form-control" id="reiter1">
                                    <option selected disabled>-bitte Auswählen-</option>
                                    <option>ToDo</option>
                                    <option>Erledigt</option>
                                    <option>Verschoben</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zu1">Zuständig:</label>
                                <select class="form-control" id="zu1">
                                    <option selected disabled>-bitte Auswählen-</option>
                                    <option>Max Mustermann</option>
                                    <option>Petra Müller</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Speichern</button>
                                <button type="submit" class="btn btn-info">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php include("footer.php"); ?>
