<?php
/* Template Name: Contact */
get_header();

$explanation = get_field('explanation');
$link = get_field('link');
var_dump($link);

if (isset($_POST['submit']) && $_POST['firstname'] && $_POST['lastname'] !== '') {
    var_dump($_POST);
    $message = 'Bonjour ' . $_POST['firstname'] . '. Nouvelle demande de stage de la part de ' . $_POST['lastname'] . '.';
    wp_mail('test@famille-boullay.fr', 'Test', $message);
}
?>
<main>
    <div>
        <form action="" method="post">
            <h1>ME CONTACTER</h1>
            <fieldset>
                <label>Je suis intéressé.e par :</label>
                <select name="interest">
                    <option value="stage">Cours & ateliers</option>
                    <option value="emploi">Rituel</option>
                    <option value="emploi">Accompagnement psycho</option>
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
    <h2>Une question ?
        Un rendez-vous ?</h2>
    <p><?php echo $explanation; ?></p>
    <p>Une <a href="<?php echo $link ?>">Newsletter</a> par mois ! </p>
    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-contact/" alt="">

</main>
<?php
get_footer();
?>