
document.getElementById('love-form').addEventListener('submit', function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Get names from input fields
    const name1 = document.getElementById('yourName').value.trim();
    const name2 = document.getElementById('partnerName').value.trim();

    if (!name1 || !name2) {
        alert('Please enter both names.');
        return;
    }

    // --- Frontend Visuals ---
    const resultSection = document.getElementById('result-section');
    const resultNames = document.getElementById('result-names');
    const loveProgress = document.getElementById('love-progress');
    const matchStatus = document.getElementById('match-status');
    const analysisDiv = document.getElementById('compatibility-analysis');
    const loadingSpinner = document.getElementById('loading-spinner');

    // Display the result section
    resultSection.style.display = 'block';
    
    // Show the loading spinner and clear previous results
    analysisDiv.innerHTML = ''; // Clear old analysis
    analysisDiv.appendChild(loadingSpinner);
    loadingSpinner.style.display = 'block';

    // Set names and calculate a random percentage for fun
    resultNames.textContent = `${name1} + ${name2}`;
    const randomPercentage = Math.floor(Math.random() * 51) + 50; // Random score between 50 and 100

    // Animate the progress bar
    loveProgress.style.width = '0%';
    loveProgress.textContent = '0%';
    setTimeout(() => {
        loveProgress.style.width = `${randomPercentage}%`;
        loveProgress.textContent = `${randomPercentage}%`;
    }, 100);

    // Set the match status message
    if (randomPercentage > 90) {
        matchStatus.innerHTML = "Perfect Match! Soulmates! ❤️";
    } else if (randomPercentage > 75) {
        matchStatus.textContent = "Great Match! Sparks are flying!";
    } else {
        matchStatus.textContent = "A promising connection!";
    }

    // --- Backend API Call ---
    fetch('api.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name1: name1, name2: name2 })
    })
    .then(response => response.json())
    .then(data => {
        // Hide the spinner
        loadingSpinner.style.display = 'none';

        if (data.error) {
            analysisDiv.innerHTML = `<p class="text-danger">Error: ${data.error}</p>`;
        } else {
            // Format and display the analysis from Gemini API
            // Replace newlines with <br> for HTML display
            const formattedAnalysis = data.analysis.replace(/\n/g, '<br>');
            analysisDiv.innerHTML = formattedAnalysis;
        }
    })
    .catch(error => {
        loadingSpinner.style.display = 'none';
        analysisDiv.innerHTML = `<p class="text-danger">An unexpected error occurred. Please check your network or PHP script. Error: ${error}</p>`;
        // console.error('Error:', error);
    });
});

// Bonus: Copy and Download functionality
document.getElementById('copy-btn').addEventListener('click', function() {
    const analysisText = document.getElementById('compatibility-analysis').innerText;
    navigator.clipboard.writeText(analysisText).then(() => {
        alert('Analysis copied to clipboard!');
    });
});

document.getElementById('download-btn').addEventListener('click', function() {
    const analysisText = document.getElementById('compatibility-analysis').innerText;
    const name1 = document.getElementById('yourName').value;
    const name2 = document.getElementById('partnerName').value;
    const blob = new Blob([`Love Compatibility Analysis for ${name1} and ${name2}\n\n${analysisText}`], { type: 'text/plain' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = `Love-Analysis-${name1}-${name2}.txt`;
    link.click();
});