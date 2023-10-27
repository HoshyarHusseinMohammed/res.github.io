<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results</title>
</head>
<body>
  <h1>Search Results</h1>

  <?php
  // Check if the search query parameter is set
  if (isset($_GET['query'])) {
      $query = $_GET['query'];

      // Display the search query
      echo "<p>Search query: " . htmlspecialchars($query) . "</p>";

      // You can perform your search logic here using the $query
      // For this example, we'll just display the query.
  } else {
      echo "<p>No search query provided.</p>";
  }
  ?>
</body>
</html>
