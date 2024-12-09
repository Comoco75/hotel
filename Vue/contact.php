<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../Vue/csscontact.css">
</head>
<body>
 
<div class="header">
    <h1>Entrer en Contact</h1>
    <p>Nous pouvons garantir la fiabilité, des tarifs bas et, plus important encore, la sécurité et le confort à l'esprit.</p>
</div>

<div class="contact-container">
    <div class="contact-item">
        <h3>Notre Bureau Principal</h3>
        <p>SoHo 94 Broadway St, New York, NY 1001</p>
    </div>
    <div class="contact-item">
        <h3>Numéro de Téléphone</h3>
        <p>234-9876-5400</p>
        <p>888-0123-4567 (sans frais)</p>
    </div>
    <div class="contact-item">
        <h3>Fax</h3>
        <p>1-234-567-8900</p>
    </div>
    <div class="contact-item">
        <h3>Email</h3>
        <p>bonjour@theme.com</p>
    </div>
</div>

<div class="contact-form-container">
    <form action="process_form.php" method="post">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="Enter a valid email address" required>
        </div>
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit">Soumettre</button>
    </form>
</div>

<div class="social-icons">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
</div>

<script>
// Fonction de validation du formulaire
function validateForm() {
    let valid = true;

    // Réinitialiser les messages d'erreur
    document.getElementById('email-error').innerHTML = '';
    document.getElementById('name-error').innerHTML = '';
    document.getElementById('message-error').innerHTML = '';

    // Récupérer les valeurs des champs
    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    const message = document.getElementById('message').value;

    // Validation de l'email
    if (!validateEmail(email)) {
        document.getElementById('email-error').innerHTML = 'Veuillez entrer un email valide.';
        valid = false;
    }

    // Validation du nom
    if (name.trim() === '') {
        document.getElementById('name-error').innerHTML = 'Le nom ne peut pas être vide.';
        valid = false;
    }

    // Validation du message
    if (message.trim() === '') {
        document.getElementById('message-error').innerHTML = 'Le message ne peut pas être vide.';
        valid = false;
    }

    return valid;
}

// Fonction de validation de l'email
function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}
</script>
</body>
</html>