const bodyTrs = document.getElementById("trs");
const bodyTrsOtp = document.getElementById("trsotp");

// Function to send request to the server
function sendRequest() {
    // Use fetch API to send GET request to the server
    fetch('/api')
        .then(response => response.json()) // Parse response as JSON
        .then(data => {
            console.log('Data received:', data);
            renderTrs(data.trs);
            renderTrsOtp(data.trsotp);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            bodyTrs.innerHTML = `<tr> Error fetching data: Network Problem </tr>`;
            bodyTrsOtp.innerHTML = `<tr> Error fetching data: Network Problem </tr>`;
        });
}

// Function to process received data for trs
function renderTrs(data) {
    bodyTrs.innerHTML = data;
}

// Function to process received data for trsotp
function renderTrsOtp(data) {
    bodyTrsOtp.innerHTML = data;
}

// Send the initial request
sendRequest();

// Set interval to send request every 10 seconds
setInterval(sendRequest, 10000);
