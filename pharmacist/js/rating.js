function submitRating() {
	// Get the selected rating value
	var rating = document.querySelector('input[name="rating"]:checked').value;
	// Create a new XMLHttpRequest object
	var xhr = new XMLHttpRequest();
	// Set the request URL and method
	xhr.open('POST', 'rating.php');
	// Set the request header
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	// Set the request parameters
	var params = 'rating=' + rating;
	// Set the response handler
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			// Update the message element with the response text
			document.getElementById('message').innerHTML = xhr.responseText;
		}
	};
	// Send the request with the parameters
	xhr.send(params);
}
