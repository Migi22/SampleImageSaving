function previewFile() {
  const fileInput = document.getElementById('signatureImage');
  const previewImage = document.getElementById('previewImage');

  if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function(e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(fileInput.files[0]);
  }
}
