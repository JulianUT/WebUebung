<?php $title = 'Reiter';?>
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

                                <tr >
                                    <th>Name</th>
                                    <th>Beschreibung</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ToDo</td>
                                    <td>Dinge die erledigt werden müssen.</td>
                                    <td>
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-ban"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Erledigt</td>
                                    <td>Dinge die erledigt sind.</td>
                                    <td>
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-ban"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verschoben</td>
                                    <td>Dinge die später erledigt werden.</td>
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
