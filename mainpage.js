// Function to simulate posting a status
function postStatus() {
    const textarea = document.querySelector('.post-box textarea');
    const feed = document.getElementById('feed');
    const postContent = textarea.value.trim();

    if (postContent) {
        const postElement = document.createElement('div');
        postElement.className = 'post';
        postElement.innerHTML = `
            <p>${postContent}</p>
            <small>Posted just now</small>
        `;
        feed.prepend(postElement); // Add new post at the top
        textarea.value = ''; // Clear the textarea
    }
}

function toggleDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
