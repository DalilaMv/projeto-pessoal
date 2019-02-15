<!-- NAVBAR -->
<nav id="navprin" class="nav-extended">
    <div class="nav-wrapper">
        <a href="index.php"><img src="Imgs/logo1.png" style="height: 55px; width: 55px; margin-top:3px; margin-left: 11px;"></a>
        <a href="index.php" class="brand-logo" style="font-family: 'Varela Round', sans-serif; margin-left: 10px">Famous Love</a>
        <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="btn1" href="#">CONTA</a></li>
            <li><a class="btn1" href="#">AJUDA</a></li>
            <li><a class="btn1" style="border-radius: 0px 0px 30px 0px;" href="#"><i class="material-icons"> exit_to_app </i></a></li>
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
        });
    });

</script>
