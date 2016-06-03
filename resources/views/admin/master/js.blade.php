<script src="{{ asset('assets/js/app.min.js') }}" ></script>
<script>

    var url = window.location;
    // Will only work if string in href matches with location
    $('ul.sidebar-nav a[href="' + url + '"]').parent().addClass('active');
    // Will also work for relative and absolute hrefs
    $('ul.sidebar-nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');


    $(document).ready(function(){
        $('#show-on-click').hide();
        $('#search').on('click',function(){
            $('#show-on-click').toggle();
        });
    });

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>