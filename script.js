document.getElementById('sign-in-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Basic validation
    if (username === '' || password === '') {
        alert('Please fill in both fields.');
        return;
    }

    // Simulate sign-in
    alert('Sign-In Successful');
});


