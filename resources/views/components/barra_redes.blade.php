<div class="menu-circular">
    <button class="menu-btn central">✖</button>

    <a href="https://www.facebook.com/cecyte.tk" target="_blank" class="menu-btn Facebook" data-tooltip="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
    </a>

    <a href="https://www.youtube.com/c/CECyTEPUE" class="menu-btn Youtube" data-tooltip="Youtube">
        <i class="fa-brands fa-youtube"></i>
    </a>

    <a href="https://x.com/CECyTEPUE" class="menu-btn X" data-tooltip="Chat">
        <i class="fa-brands fa-X"></i>
    </a>

    <a href="https://www.instagram.com/cecytepue/" class="menu-btn instagram" data-tooltip="Llamar">
        <i class="fa-brands fa-instagram"></i>
    </a>
</div>

    <a href="https://www.instagram.com/cecytepue/" target="_blank" class="instagram" data-tooltip="Instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>
</div>
<script>
    const centralBtn = document.querySelector('.central');
    const menuBtns = document.querySelectorAll('.menu-btn:not(.central)');

    centralBtn.addEventListener('click', () => {
        menuBtns.forEach(btn => {
            btn.style.display = btn.style.display === 'none' ? 'flex' : 'none';
        });
    });

    // Al iniciar, los botones están ocultos
    window.addEventListener('DOMContentLoaded', () => {
        menuBtns.forEach(btn => btn.style.display = 'none');
    });
</script>
