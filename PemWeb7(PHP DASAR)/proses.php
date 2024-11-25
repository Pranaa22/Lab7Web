<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $birthdate = $_POST['birthdate'];
    $job = $_POST['job'];

    // Calculate age
    $birthDateTimestamp = strtotime($birthdate);
    $age = (int)((time() - $birthDateTimestamp) / (365.25 * 24 * 60 * 60));

    // Determine salary based on job
    $salary = 0;
    switch ($job) {
        case "Web Development":
            $salary = 15000000;
            break;
        case "UI/UX Designer":
            $salary = 6000000;
            break;
        case "Data Engineer":
            $salary = 9000000;
            break;
        case "Security engineer":
            $salary = 12000000;
            break;
    }

    // Output the result
    echo "
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Output</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='output-container'>
            <h1>Hasil Input</h1>
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Umur:</strong> $age tahun</p>
            <p><strong>Pekerjaan:</strong> $job</p>
            <p><strong>Gaji:</strong> Rp" . number_format($salary, 0, ',', '.') . "</p>
            <a href='form.html' class='button'>Kembali</a>
        </div>
    </body>
    </html>
    ";
}
?>
