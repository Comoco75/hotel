
Portifollio template example:
https://fr.wix.com/website-template/view/html/2738?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fblank&tpClick=view_button&esi=e1499ca4-b6ac-4d65-9986-c7a9425e620f
https://fr.wix.com/website/templates/html/blank
Accuiel: Presdentation - CV
<?php include("/xampp/htdocs/GitYR/hotel/vue/commun/header.php"); ?>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST" action="Controller/utilisateurController.php">
                <input type="email"     name="email"    placeholder="Email" required />
                <input type="password"  name="password" placeholder="Mot de passe" required />
                <button type="submit"   name="action"   value="connexion">Se connecter</button>
                <i class="message">Pas encore inscrit ? <a href="index.php?page=inscription">Créez un compte</a></i>
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
<?php include_once("/xampp/htdocs/GitYR/hotel/vue/commun/footer.php"); ?>

