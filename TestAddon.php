<?php
// TestAddon.php
class TestAddon {

    public function testPHPEngine() {
        echo "Testing PHP Engine...\n";
        echo "PHP Version: " . phpversion() . "\n";
        echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
        echo "----------------------------------------\n";
    }
    public function testFileSystem() {
        echo "Testing File System...\n";
        $sampleFilePath = __DIR__ . '/sample.txt';
        
        // Test file write
        $content = "This is a test file.";
        file_put_contents($sampleFilePath, $content);
        echo "File written successfully.\n";

        // Test file read
        $readContent = file_get_contents($sampleFilePath);
        echo "File content: $readContent\n";

        // Clean up
        unlink($sampleFilePath);
        echo "File deleted.\n";
        echo "----------------------------------------\n";
    }

    public function testDatabaseConnection() {
        echo "Testing Database Connection...\n";

        $dbHost = "localhost";
        $dbUser = "your_username";
        $dbPass = "your_password";
        $dbName = "your_database";

        // Attempt connection
        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Database connected successfully.\n";

        // Clean up
        $conn->close();
        echo "----------------------------------------\n";
    }
}

// Usage example:
$testAddon = new TestAddon();

$testAddon->testPHPEngine();
$testAddon->testFileSystem();
$testAddon->testDatabaseConnection();
