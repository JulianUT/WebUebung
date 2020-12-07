<?php $title = 'Projekte';?>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>


            <!--Hauptkomponente -->
            <div class="col-9">
                <div class="row">

                    <div class="col">
                        <form>
                            <div class="form-group">
                                <h1>Projekt Auswählen</h1>
                                <label for="proj1"></label>
                                <select class="form-control" id="proj1">
                                    <option selected disabled>-bitte Auswählen-</option>
                                    <option>Webentwickling</option>
                                    <option>Haushalt</option>
                                    <option>Garten</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Auswählen</button>
                                <button type="submit" class="btn btn-primary">Bearbeiten</button>
                                <button type="submit" class="btn btn-danger">Löschen</button>
                            </div>
                        </form>

                        <!--Bearbeiten/Erstellen -->
                        <form>
                            <div class="form-group">
                                <h1>Projekt bearbeiten/erstellen:</h1>
                                <label for="pName1">Projekt:</label>
                                <input type="text" class="form-control" placeholder="Projekt" id="pName1">
                            </div>
                            <div class="form-group">
                                <label for="pBeschreibung1">Projektbeschreibung:</label>
                                <textarea type="text" class="form-control" placeholder="Beschreibung:" id="pBeschreibung1"></textarea>
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
