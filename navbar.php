
<!-- NAVBAR -->
<nav class="light-blue accent-2">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" style="margin-left: 10px">Famous Love</a>
        <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">CONTA</a></li>
            <li><a href="#">AJUDA</a></li>
            <li><a href="#"><i class="material-icons"> close </i></a></li>
        </ul>
    </div>
</nav>

<!-- NAVBAR MOBILE -->
<ul id="mobile-demo" class="sidenav purple lighten-1">
    <li><a><i class="sidenav-close white-text material-icons">close</i></a></li>
    <li><a href="problema.php" class="collapsible-header white-text">CONTA</a></li>
    <li><a href="convenios.php" class="collapsible-header white-text">AJUDA</a></li>
    <li><a href="contato.php" class="collapsible-header white-text"><i class="material-icons"> close </i></a></li>
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
