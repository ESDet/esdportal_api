<?php

/**
 * @file
 * Contains Drupal\esdportal_api\Serializers\Meap2011Serializer.
 *
 * Serializes meap_2011 records.
 */

namespace Drupal\esdportal_api\Serializers;

use Tobscure\JsonApi\SerializerAbstract;

/**
 * Serializes meap_2011 data records.
 */
class Meap2011Serializer extends SerializerAbstract {
  protected $type = 'meap_2011s';

  /**
   * Nothing special here, yet.
   */
  protected function attributes($row) {
    return $row;
  }

  /**
   * Provides primary key as id.
   */
  protected function id($row) {
    return $row->BuildingCode;
  }

  /**
   * Backwards-compatible with bnchdrff/json-api version.
   */
  protected function getId($row) {
    return $row->BuildingCode;
  }

}
