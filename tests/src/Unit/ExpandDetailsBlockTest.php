<?php

namespace Drupal\Tests\expand_details\Unit;

use Drupal\expand_details\Plugin\Block\ExpandDetailsBlock;
use Drupal\Tests\UnitTestCase;

/**
 * @coversDefaultClass \Drupal\expand_details\Plugin\Block\ExpandDetailsBlock
 * @group expand_details
 */
class ExpandDetailsBlockTest extends UnitTestCase {

  /**
   * Tests building Expand Details block.
   */
  public function testExpandDetailsBlockBuild(): void {
    include_once DRUPAL_ROOT . "/modules/custom/expand_details/src/Plugin/Block/ExpandDetailsBlock.php";

    $block = new ExpandDetailsBlock([
      'provider' => 'expand_details',
    ], 'expand_details_block', [
      'provider' => 'expand_details',
    ]);
    $build = $block->build();

    $this->assertArrayHasKey('#markup', $build);
    $this->assertEquals('
        <button type="button" name="Expand" aria-label="Expand all content on page" class="expand-details-button" id="expand-details-button">
            Expand All +
        </button>
        <button type="button" name="Collapse" aria-label="Collapse all content on page" class="expand-details-button" id="collapse-details-button">
            Collapse All -
        </button>
      ', $build['#markup']);
  }

}
