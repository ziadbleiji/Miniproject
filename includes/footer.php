<footer>

    <div class="brand">
        <h2>Rydr.</h2>
        <p>Stap in. Rij weg. Simpel.</p>
    </div>

    <div class="footer-links">

        <div class="links">
            <h3>Over ons</h3>
            <ul>
                <li><a href="index.php?url=over-ons">Het team</a></li>
                <li><a href="index.php?url=over-ons">Onze visie</a></li>
                <li><a href="index.php?url=over-ons">Vacatures</a></li>
            </ul>
        </div>

   
        <div class="links">
            <h3>Community</h3>
            <ul>
                <li><a href="index.php?url=events">Events</a></li>
                <li><a href="index.php?url=blog">Blog</a></li>
                <li><a href="index.php?url=podcast">Podcast</a></li>
            </ul>
        </div>

     
        <div class="links">
            <h3>Socials</h3>
            <ul>
                <li><a href="https://discord.com" target="_blank">Discord</a></li>
                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
            </ul>
        </div>

    </div>

</footer>

<div class="legal-footer">

    <span>© 2026 Rydr. All rights reserved</span>

    <div class="legal-links">
        <ul>
            <li><a href="index.php?url=privacy">Privacy & Policy</a></li>
            <li><a href="index.php?url=terms">Terms & Conditions</a></li>
        </ul>
    </div>

</div>

<script>
document.querySelectorAll('.account').forEach(acc => {
    acc.addEventListener('click', function(e) {
        e.stopPropagation();
        this.classList.toggle('active');
    });
});

document.addEventListener('click', () => {
    document.querySelectorAll('.account').forEach(acc => {
        acc.classList.remove('active');
    });
});
</script>

</body>
</html>