      <section class="about-itw">
        <h3 class="about-t">A propos de <br/><?php the_field('titre_about'); ?></h3>
        <p class="about-p"><?php the_field('paragraphe_about'); ?></p>
 
        <?php if( get_field('contacts') ): ?>
        <ul class="about-links-ul">
          <?php while( has_sub_field('contacts') ) : ?>
            <li class="<?php the_sub_field('info_type_contact'); ?>">
              <a href="<?php the_sub_field('contact_link'); ?>" target="_blank"><?php the_sub_field('texte_lien_de_contact'); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>

        <p class="date">Date de l'interview : <span class="date-info"><?php  echo locale_date('date_itw'); ?></span></p>
      </section>