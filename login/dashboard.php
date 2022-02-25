<div class="dashboard">
    <?php
    if (isset($_SESSION['username'])) {
        echo "Bienvenido Usuario:<b>  " . $_SESSION['username']."";
        
        ?>
        <div style="height: 10px"></div>
    <div>
        <a href="logout.php"><input type="button" class="btn-logout"
            value="Cerrar Sesión"></a>

    </div>
        <?php
    }
    ?>
</div>