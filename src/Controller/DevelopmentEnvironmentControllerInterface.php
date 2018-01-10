<?php

namespace Drupal\development_environment\Controller;

/**
 * Interface for the DevelopmentEnvironmentController class.
 */
interface DevelopmentEnvironmentControllerInterface {

  /**
   * Creates the log page listing all email logs.
   *
   * @return array
   *   A render array representing the email log listing page.
   */
  public function logListPage();

  /**
   * Log page for an individual email.
   *
   * @param int $lid
   *   The log item ID.
   *
   * @return array
   *   A render array representing the email log listing page.
   */
  public function mailLogPage($lid);

}
