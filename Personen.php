<?php $title = 'Personen';?>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>


            <!--Hauptkomponente -->
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="table-responsive-sm table-responsive-md">
                                <table class="table table-hover" data-sort-stable="true">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Name:</th>
                                        <th>E-Mail:</th>
                                        <th>In Projekt:</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Max Mustermann</td>
                                        <td>muster@mail.de</td>
                                        <td>
                                            <input type="checkbox" class="form-check-input" value="" id="inP1">
                                            <label class="form-check-label" for="inP1"></label>
                                        </td>
                                        <td>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-ban"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Petra Müller</td>
                                        <td>Petra@Muh.de</td>
                                        <td>
                                            <input type="checkbox" class="form-check-input" value="" id="inP2">
                                            <label class="form-check-label" for="inP2"></label>
                                        </td>
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
                                <label for="pName1">Username:</label>
                                <input type="text" class="form-control" placeholder="Username" id="pName1">
                            </div>
                            <div class="form-group">
                                <label for="Mail1">E-Mail-Adresse:</label>
                                <input type="email" class="form-control"  placeholder="E-Mail" id="Mail1">
                            </div>
                            <div class="form-group">
                                <label for="Pass1">Passwort:</label>
                                <input type="password" class="form-control"   placeholder="Passwort" id="Pass1">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" value="" id="ch1">
                                <label class="form-check-label" for="ch1">Dem Projekt zugeordnet</label>
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
