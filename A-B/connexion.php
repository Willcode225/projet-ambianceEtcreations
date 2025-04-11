<?php include 'includes/header.php'; ?>

<h2>Connectez-vous pour accéder à votre espace client<br>et gérer vos projets paysagers</h2>
<section class="connexion-section">
    <form class="connexion-form" method="POST" >
        <div class="form-row">
            <input type="email" name="email_connexion" placeholder="Email" required>
            <input type="password" name="mot_de_passe_connexion" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="se_connecter">SE CONNECTER</button>
    </form>
    <h2>Ou créer un compte</h2>
</section>

<section class="section-inscription">
    <form class="connexion-form" method="POST"  action="scripts/traitement_inscription.php">
        <div class="form-row">
            <input type="text" name="nom_inscription" placeholder="Nom" required>
            <input type="email" name="email_inscription" placeholder="Email" required>
        </div>
        <div class="form-row">
            <input type="tel" name="telephone_inscription" placeholder="Téléphone" required>
            <input type="password" name="mot_de_passe_inscription" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="creer_compte">CREER UN COMPTE</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
