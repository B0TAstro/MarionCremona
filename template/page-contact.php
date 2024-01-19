<?php
/* Template Name: Contact */
get_header();

$explanation = get_field('explanation');
$link = get_field('link');

if (isset($_POST['submit']) && $_POST['firstname'] && $_POST['lastname'] !== '') {
    $subject = 'Demande de contact - ' . $_POST['interest'];
    $message = $_POST['additional_info'];
    $message .= "\r\n\r\n";
    $message .= $_POST['lastname'] . ' ' . $_POST['firstname'] . "\r\n";
    $message .= "Adresse mail: {$_POST['email']}\r\n";
    $message .= "Numéro de téléphone: {$_POST['phone']}\r\n";

    wp_mail('cremona.marion@gmail.com', $subject, $message);

    echo '<div>Message envoyé avec succès !</div>';
}
?>

<main>
    <div class="wrap">
        <section class="contact">
            <div class="form_contact">
                <form action="" method="post">
                    <h1>ME CONTACTER</h1>
                    <fieldset>
                        <div>
                            <label>Je suis intéressé.e par :</label>
                            <select name="interest">
                                <option value="cours">Cours & ateliers</option>
                                <option value="rituel">Rituel</option>
                                <option value="accompagnement">Accompagnement psycho</option>
                                <option value="autre">Autre...</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div>
                            <label>Nom</label>
                            <input type="text" name="lastname" placeholder="" value="" required="">
                        </div>
                        <div class="right">
                            <label>Prénom</label>
                            <input type="text" name="firstname" placeholder="" value="" required="">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div>
                            <label>Adresse mail</label>
                            <input type="email" name="email" placeholder="" value="" required="">
                        </div>
                        <div class="right">
                            <label>Numéro téléphone</label>
                            <input type="tel" name="phone" placeholder="" value="" required="">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div>
                            <label>Dites-m'en plus...</label>
                            <textarea name="additional_info" placeholder="" required=""></textarea>
                        </div>
                    </fieldset>
                    <p>Les données collectées seront seulement communiquées au destinataire suivant : Marion Cremona.</p>
                    <button type="submit" name="submit">ENVOYER</button>
                </form>
            </div>
            <img class="splitter" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-contact/splitter.svg" alt="Splitter">
            <div class="contact_content">
                <h2>Une question ? Un rendez-vous ?</h2>
                <p><?php echo $explanation; ?></p>
                <p>Une <a href="<?php echo $link ?>">Newsletter</a> par mois !</p>
                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-contact/desktop-illustration.svg" alt="Illustration">
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
?>