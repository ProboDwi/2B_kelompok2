 <?php require_once '../public/library/header.php'; ?>
 
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function() {
            $('#select').select2();
        });

        $(document).ready(function() {
            $('#select1').select2();
        });
        $(document).ready(function() {
            $('#kategori').select2();
        });
    </script>

 <footer class="footer py-3">
        <div class="container text-center">
            <span class="text-muted">&copy; <?php echo date('Y'); ?> By Kelompok 2. All rights reserved.</span>
        </div>
    </footer>
</body>
</html>