<?php

namespace Civi\Api4\Action\Membership;

use Civi\Api4\Generic\Result;

/**
 * Export a membership to a file for the purposes of generating a "vsite"
 *
 * @method $this exportVsite(int $id) Export from membership id (required)
 *
 */

class VsiteExport extends \Civi\Api4\Generic\AbstractAction {

  /**
   * ID of membership
   *
   * @var int
   * @required
   */
  protected $membershipId;

  /**
   * @param \Civi\Api4\Generic\Result $result
   */
  public function _run(Result $result) {
    $membership = \Civi\Api4\Membership::get(FALSE)
  ->addSelect('custom.*', '*')
  ->addWhere('id', '=', $this->membershipId)
  ->setLimit(1)
  ->execute()->first();
    // Civi::log()->debug($membership);
    file_put_contents('/var/www/vsite/test.txt', json_encode($membership));
    $result[] = [
	    'exported' => $membership,
	    'file' => '/var/www/vsite/test.txt'
    ];
  }

}
