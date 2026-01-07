<?php
/**
 * Action handler for updating kumpul data in updating table
 */

require_once '../../config/database.php';

// Get and sanitize POST data
$input = filter_input_array(INPUT_POST);

if (!$input) {
    redirect('kumpul.php', 'Invalid request');
}

// Sanitize inputs
$nks = sanitizeInput($input['nks']);
$kab = sanitizeInput($input['kab']);
$status = sanitizeInput($input['status']);
$tanggal = sanitizeInput($input['tanggal']);
$tanggal = date("d-m-Y", strtotime($tanggal));

// Prepare and execute query
$query = "UPDATE updating SET statusk = ?, tanggal = ? WHERE nks = ?";

try {
    $conn = getDbConnection();
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sss', $status, $tanggal, $nks);
    mysqli_stmt_execute($stmt);
    
    redirect("kumpul.php?kab=$kab", "NKS $nks berhasil diupdate");
} catch (Exception $e) {
    redirect("kumpul.php?kab=$kab", "Error: " . $e->getMessage());
}
?>