<?php
require_once "header.php";
require_once "assets/php/db.php";
?>
<section class="max-w-3xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-6 text-center">📬 Me Contacter</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-8">Vous avez un projet ou une question ? N'hésitez pas à m'envoyer un message !</p>
    <?php
    $success = "";
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars(trim($_POST['nom']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));
        $honeypot = $_POST['website'];

        if (empty($nom) || empty($email) || empty($message)) {
            $error = "Veuillez remplir tous les champs.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Adresse email invalide.";
        } elseif (!empty($honeypot)) {
            $error = "Spam détecté.";
        } else {
            $sql = "INSERT INTO messages (nom, email, message) VALUES (:nom, :email, :message)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            if ($stmt->execute()) {
                $success = "Merci, votre message a bien été enregistré !";
            } else {
                $error = "Erreur lors de l'envoi. Veuillez réessayer.";
            }
        }
    }
    ?>
    <?php if ($success): ?>
        <div class="bg-green-100 text-green-700 p-4 mb-6 rounded"><?= $success; ?></div>
    <?php elseif ($error): ?>
        <div class="bg-red-100 text-red-700 p-4 mb-6 rounded"><?= $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="" class="space-y-6">
        <div><label for="nom" class="block mb-2">Nom</label><input type="text" name="nom" id="nom" class="w-full border p-3 rounded dark:bg-gray-800" required></div>
        <div><label for="email" class="block mb-2">Email</label><input type="email" name="email" id="email" class="w-full border p-3 rounded dark:bg-gray-800" required></div>
        <div style="display:none;"><input type="text" name="website" placeholder="Ne pas remplir"></div>
        <div><label for="message" class="block mb-2">Message</label><textarea name="message" id="message" rows="6" class="w-full border p-3 rounded dark:bg-gray-800" required></textarea></div>
        <button type="submit" class="bg-purple-500 text-white px-6 py-3 rounded hover:bg-purple-400 transition">Envoyer</button>
    </form>
</section>
<?php require_once "footer.php"; ?>