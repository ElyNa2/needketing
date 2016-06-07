<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="{{ asset('assets/js/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript">
    $('#tag_list').select2({
        placeholder: 'Choose some tags',
        tags: 'true'
    });
    $('#tag_list_modal').select2({
        placeholder: 'Choose some tags',
        tags: 'true'
    });
</script>
