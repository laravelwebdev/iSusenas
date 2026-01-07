<?php
/**
 * Database Configuration
 * Centralized database connection settings
 */

// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'u770759286_susenas');
define('DB_PASS', '2=*YF=wd#Z');
define('DB_NAME', 'u770759286_susenas');

/**
 * Get database connection
 * @return mysqli Database connection object
 * @throws Exception if connection fails
 */
function getDbConnection() {
    static $connection = null;
    
    if ($connection === null) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if (!$connection) {
            throw new Exception('Database connection failed: ' . mysqli_connect_error());
        }
        
        // Set charset to UTF-8
        mysqli_set_charset($connection, 'utf8mb4');
    }
    
    return $connection;
}

/**
 * Execute prepared statement
 * @param string $query SQL query with placeholders
 * @param array $params Parameters for the query
 * @param string $types Parameter types (i = integer, d = double, s = string, b = blob)
 * @return mysqli_result|bool Query result
 */
function executeQuery($query, $params = [], $types = '') {
    $conn = getDbConnection();
    $stmt = mysqli_prepare($conn, $query);
    
    if (!$stmt) {
        throw new Exception('Query preparation failed: ' . mysqli_error($conn));
    }
    
    if (!empty($params) && !empty($types)) {
        mysqli_stmt_bind_param($stmt, $types, ...$params);
    }
    
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    return $result !== false ? $result : true;
}

/**
 * Sanitize input data
 * @param mixed $data Data to sanitize
 * @return mixed Sanitized data
 */
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect to a page with optional message
 * @param string $url Target URL
 * @param string $message Optional message to display
 */
function redirect($url, $message = '') {
    if (!empty($message)) {
        echo "<script type='text/javascript'>alert('" . addslashes($message) . "');</script>";
    }
    echo "<script type='text/javascript'>window.location.replace('" . $url . "');</script>";
    exit;
}
