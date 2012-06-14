<?php

/*
 * Copyright 2012 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

abstract class DifferentialFieldSelector {

  final public function __construct() {
    // <empty>
  }

  final public static function newSelector() {
    return PhabricatorEnv::newObjectFromConfig('differential.field-selector');
  }

  abstract public function getFieldSpecifications();

  public function sortFieldsForRevisionList(array $fields) {
    assert_instances_of($fields, 'DifferentialFieldSpecification');
    return $fields;
  }

  public function sortFieldsForMail(array $fields) {
    assert_instances_of($fields, 'DifferentialFieldSpecification');
    return $fields;
  }

}