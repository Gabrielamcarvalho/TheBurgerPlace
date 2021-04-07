<!-- variables -->
<!-- using array with key and value  -->
<?php $links = ['Sign up to your newsletter' => './index.php#subscription', 'About us' => './about.php', 'menu' => './menu.php', 'Work for us' => './careers.php', 'Allergy information' => 'allergyinfo.pdf', 'FAQ' => './FAQ.php', 'Reviews' => './reviewsPage.php'] ?>
<?php $socialMediaFooter = ['facebook', 'instagram', 'envelope-o', 'twitter']?>

<footer class="footer">
    <div class="footer_top">
        <div class="footer_left-side">
            <div class="opening-hours">
                <h4>The Burger Place Opening Hours:</h4>
                <p class="opening-hours_weekends">Thursday - Sunday: 5pm to 11pm </p>
                <p class="opening-hours_weekdays">Monday - Wednesday: 6pm to 10pm</p>
                <h4>The Burger Place Take Away Hours:</h4>
                <p class="take-away_weekends">Thursday - Sunday: 11am to 11pm</p>
                <p class="take-away_weekdays">Monday - Wednesday: 15am to 10pm</p>
            </div>
           <div class="footer_social-media">
                <!-- using foreach loop to loop thought array of social media icons -->
                <?php foreach($socialMediaFooter as $socialMediaFooterIcon) { ?>
                    <div class="footer_social-media-icons ">
                <a href="#"><i class="footer-fa fa fa-<?=$socialMediaFooterIcon?>"></i></a>
                </div>
                <!-- close for each -->
                <?php } ?>
           </div>
        </div>

        <div class="footer_right-side">
         <div class="location">
             <h4>Come Visit Us:</h4>
             <p class="footer_address">123 Dublin City, Dublin</p>
             <h4>Call Us:</h4>
             <p class="footer_phone">000 0000</p>
             <h4>Email Us:</h4>
             <p class="footer_email">theburgerplace@email.com</p>
         </div>    
        </div>
    </div>
    
        <div class="footer-bottom">
         <!-- opening foreach with key and value -->
            <?php foreach($links as $link => $linkAccess) { ?>
             <a href="<?=$linkAccess ?>" class="footer-link"><?= $link ?></a>
            <!-- closing foreach -->
            <?php } ?>
         <p class="copyright"> Copyright &copy; 2020 | Made with &hearts; by Gabriela and Taofeek</p>
         <span class="img-copyright"> Hero image: Tioroshi Lazaro | Social media pictures: Valeria Boltneva |Contact background: Jakob Rubner |the burger place img: Iwona Castiello d'Antonio | burger: Pablo Merchán Montes | menu page: sk | chef image: Jeff Siepman</span>
     </div>
</footer>
