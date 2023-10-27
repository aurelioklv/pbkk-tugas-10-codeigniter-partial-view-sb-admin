<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron text-center mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Codeigniter's Route and Controller</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias libero amet laudantium earum, cupiditate, voluptates at ad, quasi atque alias placeat magnam rerum ratione repellendus esse similique! Accusantium ad vitae voluptates unde numquam excepturi dolore, ipsam a debitis obcaecati fugiat autem repellendus quasi eum velit officiis inventore ipsa magnam, dignissimos cupiditate pariatur ratione esse. Quod ipsam iusto facilis voluptatem cumque impedit, quis porro nobis molestias at rerum quaerat perferendis necessitatibus eos libero distinctio id asperiores consequuntur dolorem rem quo error vel. Ullam, magni obcaecati modi eos molestias dolore pariatur illo eaque dicta minima debitis soluta laborum qui temporibus tempore ratione.</p>
            </div>
        </div>
    </div>

    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>