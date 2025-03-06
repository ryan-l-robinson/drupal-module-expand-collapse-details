<?php

namespace Drupal\expand_details\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;

/**
 * Displays button for expanding or collapsing accordions.
 *
 * @Block(
 *   id = "expand_details_block",
 *   admin_label = @Translation("Expand and Collapse Details Buttons"),
 *   category = @Translation("Expand Details Module"),
 * )
 */
class ExpandDetailsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    return [
      '#markup' => Markup::create('
        <button type="button" name="Expand" aria-label="Expand all content on page" class="expand-details-button" id="expand-details-button">
            Expand All +
        </button>
        <button type="button" name="Collapse" aria-label="Collapse all content on page" class="expand-details-button" id="collapse-details-button">
            Collapse All -
        </button>
      '),
      '#attached' => [
        'library' => [
          'expand_details/expand_details',
        ],
      ],
    ];
  }

}
