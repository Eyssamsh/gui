var droppedFiles = false;

var $form = $('.ddropform');

$form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
})

.on('dragover dragenter', function() {
    $form.addClass('is-dragover');
})

.on('dragleave dragend drop', function() {
    $form.removeClass('is-dragover');
})

.on('drop', function(e) {
    droppedFiles = e.originalEvent.dataTransfer.files;
    console.log(droppedFiles);
    $('#fileToUpload').prop('files', droppedFiles);
    $form.trigger("submit");
});
