<?php
    function social_link_funtcion(){
        ob_start();
        ?>
            <div class="social-links-containers"  area-label="redes sociales"  >
                <a href="" target="_blank" title="facebook" rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="" target="_blank" title="twitter" rel="noopener noreferrer">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="" target="_blank" title="instagram" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="" target="_blank" title="youtube" rel="noopener noreferrer">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="" target="_blank" title="linkedin" rel="noopener noreferrer">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        <?php
        return ob_get_clean();
    }
?>