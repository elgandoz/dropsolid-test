/**
 * Do stuff on every block info (only once).
 *
 * The use of once in this case is only for demonstartion purposes.
 */
((Drupal, once) => {
  Drupal.behaviors.fe5BlockInfo = {
    attach(context) {
      once('fe5-block-info', '.block--type-info', context).forEach((el) => {
        console.log('FE5.2 - block-info ran:', el);
      });
    }
  };
})(Drupal, once);
