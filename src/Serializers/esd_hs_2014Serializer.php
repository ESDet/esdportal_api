<?php

/**
 * @file
 * Contains Drupal\esdportal_api\Serializers\esd_hs_2014Serializer.
 *
 * Serializes esd_hs_2014 records.
 */

namespace Drupal\esdportal_api\Serializers;

use Tobscure\JsonApi\SerializerAbstract;

class esd_hs_2014Serializer extends SerializerAbstract {
  protected $type = 'esd_hs_2014s';

  protected function attributes($row) {
    return $row;
  }

  protected function id($row) {
    return $row->buildingcode;
  }
  protected function getId($row) {
    return $row->buildingcode;
  }
}