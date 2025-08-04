function handleFiles(files) {
    const preview = document.getElementById('fileUploadPreview');
    preview.innerHTML = '';
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const div = document.createElement('div');
        div.textContent = file.name;
        preview.appendChild(div);
    }
}

document.querySelector('.file-upload-wrapper').addEventListener('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    this.classList.add('dragging');
});

document.querySelector('.file-upload-wrapper').addEventListener('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    this.classList.remove('dragging');
});

document.querySelector('.file-upload-wrapper').addEventListener('drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
    this.classList.remove('dragging');
    const files = e.dataTransfer.files;
    document.getElementById('fileUpload').files = files;
    handleFiles(files);
});

