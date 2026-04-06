<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false]);
    exit;
}

$naam        = trim(strip_tags($_POST['naam'] ?? ''));
$email       = trim(strip_tags($_POST['email'] ?? ''));
$telefoon    = trim(strip_tags($_POST['telefoon'] ?? ''));
$postcode    = trim(strip_tags($_POST['postcode'] ?? ''));
$dienst      = trim(strip_tags($_POST['dienst'] ?? ''));
$omschrijving = trim(strip_tags($_POST['omschrijving'] ?? ''));

// Verplichte velden
if (!$naam || !$email || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$postcode || !$dienst || !$omschrijving) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Vereiste velden ontbreken of zijn ongeldig.']);
    exit;
}

$to      = 'info@thuisonderhoud.be';
$subject = 'Nieuwe offerteaanvraag - thuisonderhoud.be';

$body  = "Nieuwe offerteaanvraag via thuisonderhoud.be\n";
$body .= str_repeat('-', 40) . "\n\n";
$body .= "Naam:           $naam\n";
$body .= "E-mail:         $email\n";
$body .= "Telefoon:       " . ($telefoon ?: '—') . "\n";
$body .= "Postcode:       $postcode\n";
$body .= "Type aanvraag:  $dienst\n\n";
$body .= "Omschrijving:\n$omschrijving\n";

$headers  = "From: noreply@thuisonderhoud.be\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail kon niet worden verzonden.']);
}
