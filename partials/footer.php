  </div>
    </div>
</div>

<footer>
    <p>&copy; <?= date("Y"); ?> Inventory Management System. All rights reserved. <a href="#">Privacy Policy</a></p>
</footer>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
    // Add active class to the current page link
    const currentLocation = window.location.pathname.split("/").pop();
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentLocation) {
            link.classList.add('active');
        }
    });
</script>

</body>
</html>