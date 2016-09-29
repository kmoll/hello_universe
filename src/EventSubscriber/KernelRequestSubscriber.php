<?php

/**
 * @file
 * Contains Drupal\hello_universe\EventSubscriber\KernelRequestSubscriber
 */

namespace Drupal\hello_universe\EventSubscriber;

use Symfony\Component\HttpKernel\Event;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class KernelRequestSubscriber implements EventSubscriberInterface {
  /**
   *
   * @param Symfony\Component\HttpKernel\Event\GetResponseEvent $event
   *   The Event to process.
   *
   * @TODO Function with many lines, should be splitted.
   */
  public function HelloUniverseMessage(GetResponseEvent $event) {
    drupal_set_message("Hello Universe!");
  }

  /**
   * {@inheritdoc}
   */
  static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = array('HelloUniverseMessage');
    return $events;
  }
}
