<?php
/**
 * Action handler for updating kumpul data
 */

require_once '../../config/database.php';

// Get and sanitize POST data
$input = filter_input_array(INPUT_POST);

if (!$input) {
    redirect('kumpul.php', 'Invalid request');
}

// Sanitize inputs
$nks = sanitizeInput($input['nks']);
$nus = sanitizeInput($input['nus']);
$status = sanitizeInput($input['status']);
$tanggal = sanitizeInput($input['tanggal']);
$tanggal = date("d-m-Y", strtotime($tanggal));

// Prepare and execute query
$query = "UPDATE cacah SET 
    statusk = ?, statust = ?, p1t = ?, p3k = ?, statusp = ?
    WHERE nks = ? AND nus = ?";

try {
    $conn = getDbConnection();
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssssss', 
        $status, $status, $tanggal, $tanggal, $status, $nks, $nus
    );
    mysqli_stmt_execute($stmt);
    
    redirect("kumpul.php?nks=$nks", "NKS $nks nomor sampel $nus berhasil diupdate");
} catch (Exception $e) {
    redirect("kumpul.php?nks=$nks", "Error: " . $e->getMessage());
}
?>