function saveSignature() {
    var fileInput = document.getElementById('signatureImage');
    var file = fileInput.files[0];

    if (file) {
        var formData = new FormData();
        formData.append('signatureImage', file);

        // Send signature data to server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'process_form.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Signature saved successfully');
                    // Optionally, you can redirect to another page after successful submission
                    // window.location.href = 'success_page.php';
                } else {
                    console.error('Error saving signature');
                }
            }
        };
        xhr.send(formData);
    } else {
        console.error('No file selected');
    }
}
