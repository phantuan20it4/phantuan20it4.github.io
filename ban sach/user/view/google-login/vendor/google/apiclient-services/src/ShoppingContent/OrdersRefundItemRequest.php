<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\ShoppingContent;

class OrdersRefundItemRequest extends \Google\Collection
{
  protected $collection_key = 'items';
  protected $itemsType = OrdersCustomBatchRequestEntryRefundItemItem::class;
  protected $itemsDataType = 'array';
  public $operationId;
  public $reason;
  public $reasonText;
  protected $shippingType = OrdersCustomBatchRequestEntryRefundItemShipping::class;
  protected $shippingDataType = '';

  /**
   * @param OrdersCustomBatchRequestEntryRefundItemItem[]
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return OrdersCustomBatchRequestEntryRefundItemItem[]
   */
  public function getItems()
  {
    return $this->items;
  }
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  public function getOperationId()
  {
    return $this->operationId;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  public function getReasonText()
  {
    return $this->reasonText;
  }
  /**
   * @param OrdersCustomBatchRequestEntryRefundItemShipping
   */
  public function setShipping(OrdersCustomBatchRequestEntryRefundItemShipping $shipping)
  {
    $this->shipping = $shipping;
  }
  /**
   * @return OrdersCustomBatchRequestEntryRefundItemShipping
   */
  public function getShipping()
  {
    return $this->shipping;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrdersRefundItemRequest::class, 'Google_Service_ShoppingContent_OrdersRefundItemRequest');
