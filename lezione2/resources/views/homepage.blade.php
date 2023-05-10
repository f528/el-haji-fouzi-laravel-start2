<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap'>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class=" container-fluid bg-secondary">
            <a class="navbar-brand" href="/">Aircompany</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>

                    <a class="nav-link" href="distination">distinazioni</a>
                    <a class="nav-link" href="azienda">azienda</a>
                    <a class="nav-link" href="contact">contact</a>

                </div>
            </div>
        </div>
    </nav>
    <main id="main">
        <h1>Card Split Hovers</h1>
        <div class="card"><img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="A City skyline at sunset" />
            <div class="text">
                <h2 data-splitting="">The City</h2>
                <p data-splitting="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos excepturi nostrum necessitatibus doloremque? Quasi non molestias odio. Quasi non molestias odio.</p>
            </div>
        </div>
        <div class="card"><img src="https://images.unsplash.com/photo-1586500036706-41963de24d8b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="A City skyline at sunset" />
            <div class="text">
                <h2 data-splitting="">The Beach</h2>
                <p data-splitting=""> Quasi non molestias odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos excepturi nostrum necessitatibus doloremque? Quasi non molestias odio.</p>
            </div>
        </div>
    </main>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://unpkg.com/splitting/dist/splitting.min.js'></script>
    <script src="../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
