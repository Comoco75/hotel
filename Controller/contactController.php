
<?php
session_start(); // Démarre la session pour accéder au token CSRF

// Vérifiez si le formulaire a été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifiez que le token CSRF est présent et valide
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        header("Location: ../vue/contact.php?error=csrf");
        exit(); // Arrête l'exécution si le token CSRF est invalide
    }

    // Récupérer et valider les données du formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Vérifiez si les champs sont remplis
    if (empty($nom) || empty($email) || empty($message)) {
        header("Location: ../vue/contact.php?error=empty_fields");
        exit();
    }

    // Validez le format de l'adresse e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../vue/contact.php?error=invalid_email");
        exit();
    }

    // Sécuriser les données (prévention XSS)
    $nom = htmlspecialchars($nom);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    // Exemple de traitement : envoyer un email
    $to = "destinataire@example.com"; // Remplacez par l'adresse email cible
    $subject = "Nouveau message de contact de $nom";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

    // Essayez d'envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: ../vue/contact.php?success=1");
    } else {
        header("Location: ../vue/contact.php?error=mail_error");
    }

} else {
    // Si la requête n'est pas POST, redirigez l'utilisateur
    header("Location: ../vue/contact.php");
    exit();
}
