<!-- NAVBAR -->
<nav class="nav-extended" style="background: #800080;">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" style="margin-left: 10px">Famous Love</a>
        <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="btn1" href="#">CONTA</a></li>
            <li><a class="btn1" href="#">AJUDA</a></li>
            <li><a class="btn1" href="#"><i class="material-icons"> exit_to_app </i></a></li>
        </ul>
    </div>
</nav>

<!-- NAVBAR MOBILE -->
<ul id="mobile-demo" class="sidenav purple lighten-1">
    <li><a><i class="sidenav-close white-text material-icons">close</i></a></li>
    <li><a class="btn1" href="#" class="collapsible-header white-text">CONTA</a></li>
    <li><a class="btn1" href="#" class="collapsible-header white-text">AJUDA</a></li>
    <li><a class="btn1" href="#" class="collapsible-header white-text"><i class="material-icons"> close </i></a></li>
</ul>

<!-- NAVBAR SCRIPT -->
<script>
    $(document).ready(() => {
        $('.sidenav').sidenav();
        $(".dropdown-trigger").dropdown();
        $('.collapsible').collapsible();
        // MOBILE ARROW     
        $('#mob-especialidades').click(() => {
            let val = ($('.chevron').html() == 'chevron_right') ? 'keyboard_arrow_down' : 'chevron_right';
            $('.chevron').html(val)
        })
    })

</script>
