

<?php include 'includes/header.php'; ?>

  <!-- Menu latéral -->
  <aside class="menu-dashboard">
    <ul>
      <li><strong>NOTIFICATIONS [2]</strong></li>
      <li>PROFIL</li>
      <li>PARAMÈTRES</li>
      <li>MESSAGES</li>
      <li>LISTE DES UTILISATEURS</li>
      <li>AJOUTER DES IMAGES</li>
    </ul>
  </aside>

  <!-- Section nouvelle demande de devis -->
  <section class="section-nouvelle-demande section-devis-en-cours">
    
    <div class="histo-ligne"> 
      <div class="ligne"></div>
      <h2>Nouvelle demande de devis</h2>
      <div class="ligne"></div>
  </div>
    
    <div class="devis-passe realisation">
      <p>Devis #1234</p>
      <p>
        Il est établi depuis longtemps qu’un lecteur sera distrait par le contenu lisible d’une page lorsqu’il regarde sa mise en page. 
        L’intérêt d’utiliser Lorem Ipsum est qu’il a une distribution plus ou moins normale de lettres.
      </p>
      <div class="overlay">
          <i class="fas fa-eye"></i>
          <p>Voir le devis</p>
      </div>
   </div>

   <div class="boutons-action">
    <button class="bouton-annuler">Annuler</button>
    <button class="bouton-valider">Valider</button>
  </div>
  </section>



  

  <!-- Historique des devis -->
  <section class="section-historique-devis">
    <div class="histo-ligne"> 
        <div class="ligne"></div>
        <h2>Historique des devis</h2>
        <div class="ligne"></div>
    </div>
  
    <div class="liste-historique">
      <div class="devis-passe realisation">
        <p>Devis #1234</p>
        <img src="images/Black and White Simple Order Form A4 Document (1).jpg" alt="devis 1">
        <div class="overlay">
            <i class="fas fa-eye"></i>
            <p>Voir le devis</p>
        </div>
     </div>
     <div class="devis-passe realisation">
        <p>Devis #1234</p>
        <img src="Images/Black and White Simple Order Form A4 Document (1).jpg"alt="Devis passé">
        <div class="overlay">
          <i class="fas fa-eye"></i>
          <p>Voir le devis</p>
       </div>
     </div>
     <div class="devis-passe realisation">
        <p>Devis #1234</p>
        <img src="Images/Black and White Simple Order Form A4 Document (1).jpg" alt="Devis passé">
        <div class="overlay">
          <i class="fas fa-eye"></i>
          <p>Voir le devis</p>
        </div>
     </div>
   </div>

   <div class="histo-ligne">
    <div class="ligne"></div>
    <h2>Liste des utilisateurs</h2>
    <div class="ligne"></div>
</div>
  
  </section>

  <!-- Nouveaux utilisateurs -->
  <section class="section-utilisateurs">
 
    
    <table class="tableau-client">
        <thead>
            <tr>
                <th>#</th>
                <th>NOM</th>
                <th>PRÉNOM</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@social</td>
                <td>0000000</td>
                <td>
                    <select class="action-select">
                        <option value="view">Voir</option>
                        <option value="edit">Modifier</option>
                        <option value="delete">Supprimer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@social</td>
                <td>0000000</td>
                <td>
                    <select class="action-select">
                        <option value="view">Voir</option>
                        <option value="edit">Modifier</option>
                        <option value="delete">Supprimer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
                <td>0000000</td>
                <td>
                    <select class="action-select">
                        <option value="view">Voir</option>
                        <option value="edit">Modifier</option>
                        <option value="delete">Supprimer</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
</section>
<?php include 'includes/footer.php'; ?>