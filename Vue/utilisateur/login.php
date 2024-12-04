
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST" action="../controleur/UtilisateurControleur.php">
                <input type="email"     name="email"    placeholder="Email" required />
                <input type="password"  name="password" placeholder="Mot de passe" required />
                <button type="submit"   name="action"   value="connexion">Se connecter</button>
                <i class="message">Pas encore inscrit ? <a href="./inscription.php">Créez un compte</a></i>
            </form>
        </div>
    </div>

    <!-- Affichage des messages d'erreur ou de succès -->
        <?php if (isset($_GET['error'])): ?>
    <?php if ($_GET['error'] == 'missing_fields'): ?>
        <p style="color:red;">Veuillez entrer votre email et votre mot de passe.</p>
    <?php elseif ($_GET['error'] == 'invalid_credentials'): ?>
        <p style="color:red;">Email ou mot de passe incorrect.</p>
    <?php endif; ?>
<?php endif; ?>
