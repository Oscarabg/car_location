
    <main>
        <h1>Connexion</h1>

        <form action="<?=SITE_NAME; ?>/connecter" method="POST">
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="pwd">Mot de passe :</label>
                <input type="password" id="pwd" name="pwd" required>
            </div>
            <input type="submit" value="Se connecter">
        
        </form>
    </main>
