<?php
add_shortcode('update-form', 'simplon_update_form');

function simplon_update_form()
{
    if (!is_user_logged_in()) {
        auth_redirect();
    }
    ob_start(); ?>
    <form id="custom-registration-form" method="post" action="" class="wp-block-form">
        <div class="wp-block-formfield">
            <label for="email" class="wp-block-formlabel">Email :</label>
            <input type="email" id="email" name="email" value="<?= wp_get_current_user()->user_email ?>" class="wp-block-forminput">
        </div>
        <div class="wp-block-formfield">
            <label for="password" class="wp-block-formlabel">Mot de passe :</label>
            <input type="password" id="password" name="password" class="wp-block-forminput">
        </div>
        <div class="wp-block-form__field">
            <input type="submit" name="simplon-update" value="Mettre a jour mon compte" class="wp-block-button">
        </div>
    </form>
<?php
    return ob_get_clean();
}

add_action('template_redirect', 'simplon_update_process');

function simplon_update_process()
{
    if (isset($_POST['simplon-update'])) {
        if (!is_user_logged_in()) {
            auth_redirect();
            exit;
        }

        // Permet de récuperer l'ID de l'user connecté actuellement
        $current_user_id = wp_get_current_user()->ID;
        $email = !empty($_POST['email']) ? sanitize_email($_POST['email']) : null;

        // if (!empty($_POST['email'])) {
        //     $email = sanitize_email($_POST['email']);
        // } else {
        //     $email = null;
        // }

        $password = !empty($_POST['password']) ? $_POST['password'] : null;

        if ($email) {
            wp_update_user([
                'ID' => $current_user_id,
                'user_email' => $email,
            ]);
        }

        if ($password) {
            wp_update_user([
                'ID' => $current_user_id,
                'user_pass' => $password,
            ]);

            wp_logout();
            auth_redirect();
        }

        header('location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
}
