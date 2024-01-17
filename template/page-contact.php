<?php
/* Template Name: Contact */
get_header();

$explanation = get_field('explanation');
$link = get_field('link');

if (isset($_POST['submit']) && $_POST['firstname'] && $_POST['lastname'] !== '') {
    // Construire le message du mail
    $subject = 'Demande de contact - ' . $_POST['interest'];
    $message = $_POST['additional_info'];
    $message .= "Nom: {$_POST['lastname']}\r\n";
    $message .= "Prénom: {$_POST['firstname']}\r\n";
    $message .= "Adresse mail: {$_POST['email']}\r\n";
    $message .= "Numéro de téléphone: {$_POST['phone']}\r\n";

    // Envoyer le mail
    wp_mail('cremona.marion@gmail.com', $subject, $message);

    // Afficher un message de confirmation
    echo '<div>Message envoyé avec succès !</div>';
}
?>

<main>
    <div>
        <form action="" method="post">
            <h1>ME CONTACTER</h1>
            <fieldset>
                <label>Je suis intéressé.e par :</label>
                <select name="interest">
                    <option value="cours">Cours & ateliers</option>
                    <option value="rituel">Rituel</option>
                    <option value="accompagnement">Accompagnement psycho</option>
                    <option value="autre">Autre...</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Nom</label>
                <input type="text" name="lastname" placeholder="" value="" required="">
            </fieldset>
            <fieldset>
                <label>Prénom</label>
                <input type="text" name="firstname" placeholder="" value="" required="">
            </fieldset>
            <fieldset>
                <label>Adresse mail</label>
                <input type="email" name="email" placeholder="" value="" required="">
            </fieldset>
            <fieldset>
                <label>Numéro téléphone</label>
                <input type="tel" name="phone" placeholder="" value="" required="">
            </fieldset>
            <fieldset>
                <label>Dites-m'en plus...</label>
                <textarea name="additional_info" placeholder="" required=""></textarea>
            </fieldset>
            <p>Les données collectées seront seulement communiquées au destinataire suivant : Marion Cremona.</p>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-contact/splitter.svg" alt="Splitter">
    <h2>Une question ? Un rendez-vous ?</h2>
    <p><?php echo $explanation; ?></p>
    <p>Une <a href="<?php echo $link ?>">Newsletter</a> par mois ! </p>
    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-contact/" alt="">
</main>

<?php
get_footer();
?>