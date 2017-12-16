<!-- JQuery -->
<script src="{{ url('assets/plugins/mdbootstrap/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script src="{{ url('assets/plugins/mdbootstrap/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ url('assets/plugins/mdbootstrap/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
{{--<script src="{{ url('assets/plugins/mdbootstrap/js/mdb.min.js') }}"></script>--}}
<script src="{{ url('assets/plugins/mdbootstrap/js/mdb-landing.js') }}"></script>
<script>
    //Animation init
    new WOW().init();

    // initialize scrollspy
    $('body').scrollspy({
        target: '.dotted-scrollspy'
    });

    // initialize lightbox
    $(function() {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    $('.navbar-collapse a').click(function() {
        $(".navbar-collapse").collapse('hide');
    });
</script>


