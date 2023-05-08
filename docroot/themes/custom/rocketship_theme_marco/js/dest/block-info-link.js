/**
 * Do stuff on every block info link (only once).
 *
 * The use of once in this case is only for demonstartion purposes.
 */
((Drupal, once) => {
  Drupal.behaviors.fe5BlockInfoLink = {
    attach(context) {
      once('fe5-block-info-link', '.block--type-info .field--name-body', context).forEach((el) => {
        // This log should appear under FE3.2 since I used libraries dependencies
        // to establish an order.
        console.log('FE5.3 - block-info-link ran (on the body field):', el);
      });
    }
  };
})(Drupal, once);
