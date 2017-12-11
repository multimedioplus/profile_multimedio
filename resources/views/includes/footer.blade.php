<!-- JQuery -->
<script src="{{ url('assets/plugins/mdbootstrap/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script src="{{ url('assets/plugins/mdbootstrap/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ url('assets/plugins/mdbootstrap/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script src="{{ url('assets/plugins/mdbootstrap/js/mdb.min.js') }}"></script>
<script src="{{ url('assets/plugins/mdbootstrap/js/mdb-landing.js') }}"></script>

<script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>