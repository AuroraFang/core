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

class Google_Service_HomeGraphService_ReportStateAndNotificationRequest extends Google_Model
{
  public $agentUserId;
  public $eventId;
  public $followUpToken;
  protected $payloadType = 'Google_Service_HomeGraphService_StateAndNotificationPayload';
  protected $payloadDataType = '';
  public $requestId;

  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  public function getEventId()
  {
    return $this->eventId;
  }
  public function setFollowUpToken($followUpToken)
  {
    $this->followUpToken = $followUpToken;
  }
  public function getFollowUpToken()
  {
    return $this->followUpToken;
  }
  /**
   * @param Google_Service_HomeGraphService_StateAndNotificationPayload
   */
  public function setPayload(Google_Service_HomeGraphService_StateAndNotificationPayload $payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return Google_Service_HomeGraphService_StateAndNotificationPayload
   */
  public function getPayload()
  {
    return $this->payload;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
}