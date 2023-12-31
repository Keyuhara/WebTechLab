document.addEventListener('DOMContentLoaded', function () {
    // get modal
    const modal = document.getElementById('newPostModal');

    // get button that opens the modal
    const plusButton = document.getElementById('plusButton');

    // get button that opens the modal
    const closeForm = document.getElementById('closeForm');

    // when the user clicks the plus button this will open the modal
    plusButton.onclick = function() {
        modal.style.display = 'block';
    };

    // when user clicks close button on Modal it closes
    closeForm.onclick = function() {
        modal.style.display = 'none';
    };

    // closes the modal
    function closeModal() {
        modal.style.display = 'none';
        location.reload();
    }

    // submit the form (might need to change or update when connected to db)
    document.getElementById('newPostForm').addEventListener('submit', function(event) {
        event.preventDefault();
    
        const formData = new FormData(document.getElementById('newPostForm'));
        const category = getCategoryFromPage();
        console.log('Form Data:', formData);
        formData.append('category', category);
    
        // Use the Fetch API to send the data to the PHP script
        fetch('./add-post.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // You can handle the response here
    
            // Optionally, close the modal
            closeModal();
            location.reload();
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors
        });
    });
    function getCategoryFromPage() {
        const url = window.location.href;

    // Split the URL by '/' and get the last part
        const urlParts = url.split('/');
        const category = urlParts[urlParts.length - 1];

        return category;
    }    
});