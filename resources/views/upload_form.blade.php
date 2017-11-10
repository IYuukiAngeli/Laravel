
<form action="/product" method="post">
    {{ csrf_field() }}
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can add more than one):
    <br />
    <input type="file" id="fileupload" name="photos[]" data-url="/upload" />
    <br />
    <div id="files_list"></div>
    <p id="loading"></p>
    <input type="hidden" name="file_ids" id="file_ids" value="" />
    <input type="submit" value="Upload" />
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/vendor/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script>
    $(function () {
        $('#fileupload').fileupload({
            dataType: 'json',

            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<p/>').html(file.name);
                    if ($('#file_ids').val() != '') {
                       $('#file_ids').val($('#file_ids').val());
                    }
                });
            }
        });
    });
</script>
