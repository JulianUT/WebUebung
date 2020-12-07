<?php $title = 'Login';?>
<?php include("header.php"); ?>



<!--Hauptkomponente -->
            <div class="col">
                <div class="row">
                    <div class="col">
                    <form>
                        <div class="form-group">
                            <label for="Mail1">E-Mail-Adresse:</label>
                            <input type="email" class="form-control" placeholder="E-Mail" id="Mail1">
                        </div>
                        <div class="form-group">
                            <label for="Pass1">Passwort:</label>
                            <input type="password" class="form-control"   placeholder="Passwort" id="Pass1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" value="" id="ch1">
                            <label class="form-check-label" for="ch1">AGB akzeptieren</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Einloggen</button>
                        <small class="form-text text-muted">Noch nicht registriert? <a href="">Registrierung</a></small>
                        <small class="form-text text-muted">Da Login noch nicht implementiert ist: <a href="Aktuelles_Projekt.php">Überspringen</a></small>
                    </form>
                    </div>
                </div>
            </div>
<?php include("footer.php"); ?>
