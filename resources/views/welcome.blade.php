<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Without Vite (CDN)</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar test with responsive dropdown -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Bootstrap 5 Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="dropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Click to Test JS
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLink">
                <li><span class="dropdown-item-text text-success fw-bold">✓ JS is working!</span></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Container: Grid & Typography -->
    <div class="container py-5">
        <h1 class="display-4 text-center text-primary mb-3">Running Without Vite</h1>
        <p class="lead text-center text-muted mb-5">Loaded via pure HTML tags.</p>

        <div class="row g-3">
            <div class="col-md-8">
                <div class="p-4 bg-white border rounded shadow-sm">
                    <h4 class="text-success">CSS Grid Test: col-md-8</h4>
                    <p class="mb-0 text-secondary">Takes 2/3 width on desktop screen sizes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-primary text-white rounded shadow-sm">
                    <h4>col-md-4</h4>
                    <p class="mb-0">Takes 1/3 width on desktop screen sizes.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS (includes Popper for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>