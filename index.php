<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Flames Love Calculator:</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


    <style>
        * {
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        }

        body {
            background-color: #f8f9fa;
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        .progress-bar {
            background-color: #dc3545;
            /* Red color like in the image */
            font-size: 1rem;
        }

        .card {
            border: none;
        }

        #compatibility-analysis {
            background-color: #fff;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            margin-left: 20px;
        }

        input[type="text"] {
            height: 55px;
        }
    </style>
</head>

<body>
    
    <main class="container my-4 mt-5">
        <div class="text-center">
            <h1>Free AI Love Calculator</h1>
            <p class="lead">The AI-Powered Love Calculator is a fun and interactive tool that analyzes the
                chemistry between two people based on their names, love and astrology. Simply enter your name and your
                partner’s name, and get an instant love score (0% to 100%) along with a detailed about relationship
                compatibility.
                The higher the percentage ,the better the match for relationship compactibility.</p>
        </div>

        <div class="card p-4 shadow-sm mt-4">
            <form id="love-form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="yourName" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="partnerName" class="form-label">Partner's Name</label>
                        <input type="text" class="form-control" id="partnerName" placeholder="Enter partner's name"
                            required>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Calculate Love</button>
                </div>
            </form>
        </div>

        <!-- Result Section -->

        <div id="result-section" class="mt-5" style="display: none;">
            <div class="card p-4 shadow-sm mt-4">

                <h2>Love Match Result:</h2>
                <p class="h5"><strong id="result-names"></strong></p>
                <div class="progress" style="height: 30px;">
                    <div id="love-progress" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
                <p class="mt-2 h4" id="match-status"></p>
            </div>

            <div class="card p-4 shadow-sm mt-4">
                <div class="mt-4">
                    <h3>Compatibility Analysis:</h3>
                    <div id="compatibility-analysis" class="border p-3 rounded">
                        <!-- Spinner/Loading Indicator -->
                        <div id="loading-spinner" class="d-flex justify-content-center">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button id="copy-btn" class="btn btn-secondary">Copy</button>
                        <button id="download-btn" class="btn btn-secondary">Download</button>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">AI Flames Love Calculator: A Fun Way to Measure Your Love Compatibility</h2>
        <p>Love has always been a mysterious and exciting emotion. Whether you're in a new relationship or have been
            with your partner for years, curiosity about your compatibility is natural. The AI Flames Love Calculator is
            a fun and interactive tool designed to give you an entertaining glimpse into your love connection. Simply
            enter your name and your partner's name, and let the calculator reveal your love percentage!</p>

        <h3>Key Features of the AI Flames Love Calculator</h3>

        <h4 class="mt-3">Simple & User-Friendly Interface</h4>
        <li>The tool is designed for ease of use.</li>
        <li>No complicated steps—just enter two names and click "Calculate."</li>

        <h4 class="mt-3">Instant Love Percentage Result</h4>
        <li>After entering the names, the tool quickly displays a compatibility score.</li>
        <li>Results range from 0% to 100%, adding excitement and humor.</li>

        <h4 class="mt-3">Fun & Engaging Experience</h4>

        <li>Perfect for couples, friends, or even just for fun.</li>
        <li>Share your results on social media and compare with others.</li>

        <h3 class="mt-3">Final Thoughts</h3>

        <p>The <b>AI Flames Love Calculator</b> is not meant to be taken seriously but serves as a delightful little
            experiment for couples and friends. Whether you get a high score or a low one, remember that real love goes
            beyond numbers—but it’s always fun to see what the calculator says!</p>

    </main>

    <footer class="text-center mt-5 py-3">
        <a href="">AI Article Generator</a>
        <a href="">AI Email Writer</a>
        <a href="">AI About US Generator</a>
        <p class="mt-3">© Copyright 2025 - allaiprompts.net</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>

</html>