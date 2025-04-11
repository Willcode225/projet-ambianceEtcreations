<?php 


include 'includes/header.php'; ?>



   



   <section class="contact-form-section">
        <h2>Remplissez le formulaire ci-dessous pour obtenir un devis personnalisé.</h2>
        <form action="scripts/submit-devis.php" method="POST" class="contact-form">
        <div class="form-row">
            <input type="text" name="nom" placeholder="NOM" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="Adresse email" required>
        </div>
        <div class="form-row">
            <input type="tel" name="telephone" placeholder="Téléphone" required>
           
            <select  name="service" required>
                <option value="" disabled selected>Choisissez un service</option>
                <option value="entretien">Entretien & Abattage</option>
                <option value="amenagement">Aménagement Extérieurs</option>
                <option value="pepiniere">Pépinière</option>
            </select>
        </div>
        <textarea name="message" placeholder="Écris un message"></textarea>
        <button type="submit">Envoyer la demande</button>
        </form>
  </section>











    <?php include 'includes/footer.php'; ?>