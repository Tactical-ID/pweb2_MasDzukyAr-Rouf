  var searchInput = document.getElementById('searchInput');
  var searchResults = document.getElementById('searchResults');

  // Function to perform search
  function performSearch() {
    // Clear previous results
    searchResults.innerHTML = "";

    // Get the search query
    var query = searchInput.value.trim().toLowerCase();

    // Get all rows in the table
    var rows = document.querySelectorAll(".datatables tbody tr");

    // Loop through each row and check if it matches the search query
    rows.forEach(function (row) {
      var cells = row.querySelectorAll("td");
      var found = false;

      // Loop through each cell in the row and check for a match
      cells.forEach(function (cell) {
        if (cell.textContent.toLowerCase().includes(query)) {
          found = true;
          return;
        }
      });

      // If a match is found, display the row
      if (found) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }

  // Listen for input event in the search input
  searchInput.addEventListener("input", function () {
    performSearch();
  });