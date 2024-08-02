<!DOCTYPE html>
<html>
<head>
    <title>Nuova richiesta di contatto</title>
</head>
<body>
    <h1>Richiesta di contatto</h1>
    @isset($details['name'])
        <p>Nome: {{ $details['name'] }}</p>
    @endisset
    @isset($details['surname'])
        <p>Cognome: {{ $details['surname'] }}</p>
    @endisset
    @isset($details['email'])
        <p>Email: {{ $details['email'] }}</p>
    @endisset
    @isset($details['birthPlace'])
        <p>Luogo di nascita: {{ $details['birthPlace'] }}</p>
    @endisset
    @isset($details['birthday'])
        <p>Data di nascita: {{ $details['birthday'] }}</p>
    @endisset
    @isset($details['phone'])
        <p>Telefono: {{ $details['phone'] }}</p>
    @endisset
    @isset($details['company'])
        <p>Azienda: {{ $details['company'] }}</p>
    @endisset
    @isset($details['message'])
        <p>Messaggio: {{ $details['message'] }}</p>
    @endisset
    @isset($details['privacyPolicy'])
        <p>Privacy Policy Accettata: {{ $details['privacyPolicy'] ? 'Sì' : 'No' }}</p>
    @endisset
</body>
</html>
