<?php

/**
 * Action handler for updating data.
 */

require_once '../../config/database.php';

// Get and sanitize POST data
$input = filter_input_array(INPUT_POST);

if (! $input) {
    redirect('dcacah.php', 'Invalid request');
}

// Sanitize inputs
$nks = sanitizeInput($input['nks']);
$statusc = sanitizeInput($input['statusc']);
$p1c = sanitizeInput($input['p1c']);
$p2c = sanitizeInput($input['p2c']);
$p3c = sanitizeInput($input['p3c']);
$nama = sanitizeInput($input['nama']);

// Prepare and execute query
$query = 'UPDATE updating SET 
    statusc = ?, p1c = ?, p2c = ?, p3c = ?
    WHERE nks = ?';

try {
    $conn = getDbConnection();
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssss',
        $statusc, $p1c, $p2c, $p3c, $nks
    );
    mysqli_stmt_execute($stmt);

    redirect("dcacah.php?nama=$nama", "NKS $nks berhasil diupdate");
} catch (Exception $e) {
    redirect("dcacah.php?nama=$nama", 'Error: '.$e->getMessage());
}
