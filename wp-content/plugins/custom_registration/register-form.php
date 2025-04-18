<?php
add_shortcode('register-form', 'simplon_register_form');

function simplon_register_form()
{
    ob_start(); ?>
    <form id="custom-registration-form" method="post" action="" class="wp-block-form">
        <?php wp_nonce_field('csrf', 'custom-signup-form'); ?>
        <div class="wp-block-form__field">
            <label for="username" class="wp-block-form__label">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" class="wp-block-form__input" required>
        </div>
        <div class="wp-block-form__field">
            <label for="email" class="wp-block-form__label">Email :</label>
            <input type="email" id="email" name="email" class="wp-block-form__input" required>
        </div>
        <div class="wp-block-form__field">
            <label for="password" class="wp-block-form__label">Mot de passe :</label>
            <input type="password" id="password" name="password" class="wp-block-form__input" required>
        </div>
        <div class="wp-block-form__field">
            <input type="submit" name="simplon-register" value="S'inscrire" class="wp-block-button">
        </div>
    </form>
<?php
    return ob_get_clean();
}

add_action('template_redirect', 'simplon_register_process');

function simplon_register_process()
{
    if (isset($_POST['simplon-register'])) {
        if (wp_verify_nonce($_POST['custom-signup-form'], 'csrf')) {
            $username = sanitize_user($_POST['username']);
            $email = sanitize_email($_POST['email']);
            $password = $_POST['password'];

            wp_create_user($username, $password, $email);
        } else {
            throw new Exception('Tu es méchant!!! arrête cest pas bien', 1);
        }
    }
}
