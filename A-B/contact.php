<?php include 'includes/header.php'; ?>


<section class="contact-form-section">
    <h2>N'hésitez pas à écrire à Ambiance et Créations à tout moment</h2>
    <form class="contact-form" method="POST"  action="scripts/submit_contact.php">
        <div class="form-row">
            <input type="text" name="nom" placeholder="NOM" required>
            <input type="email" name="email" placeholder="Adresse email" required>
        </div>
        <div class="form-row">
            <input type="tel" name="telephone" placeholder="Téléphone" required>
        </div>
        <textarea name="message" placeholder="Écris un message" rows="5" required></textarea>
        <button type="submit" name="envoyer_message">Envoyer un message</button>
    </form>
</section>


<section class="connexion-section">
    <h2>Ou se connecter</h2>
    <form class="connexion-form" method="POST" action="traitement_connexion.php">
        <div class="form-row">
            <input type="email" name="email_connexion" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="se_connecter">SE CONNECTER</button>
    </form>
</section>

<section id="contact" class="contact">
    <div class="contact-container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2642.7819851030245!2d2.5621296764448735!3d48.51824387128804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5ef7eb854b287%3A0x9ae52dc412fc1b1c!2sAMBIANCE%20%26%20CREATIONS%20PAYSAGISTE%20SAINT%20FARGEAU%20PONTHIERRY!5e0!3m2!1sfr!2sci!4v1742155248922!5m2!1sfr!2sci" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-info">
            <div class="info-block">
                <div class="home-adrea">
                    <i class="fas fa-home"></i>
                    <h3> Adresse complète</h3>
                </div>
                <p>136 Av. de Fontainebleau<br>77310 Pringy, France</p>
            </div>

            <div class="info-block">
                <div class="calandrier-horaire">
                    <i class="fas fa-clock"></i>
                    <h3>Horaires d'ouverture</h3>
                </div>
                <p>
                    Lundi – Vendredi : 9h00 – 18h00<br>
                    Samedi : 10h00 – 16h00<br>
                    Fermé le dimanche
                </p>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
